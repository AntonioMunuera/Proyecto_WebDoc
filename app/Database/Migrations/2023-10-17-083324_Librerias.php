<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Librerias extends Migration
{
    public function up()
    {
        $this->forge->addField([
        'id'=>[
            'type'=>'INT',
            'constraint'=> 5,
            'unsigned'=>TRUE,
            'auto_increment'=>TRUE
        ],
        'titulo'=>[
            'type'=>'VARCHAR',
            'constraint'=> 255,
            
        ],
        'descripcion'=>[
            'type'=>'TEXT'
            
        ],
        'ruta_archivo'=>[
            'type'=>'VARCHAR',
            'constraint'=> 500,
            
        ],
        'formato'=>[
            'type'=>'VARCHAR',
            'constraint'=> 50,
            
        ],
        'tamano'=>[
            'type'=>'FLOAT',
            'unsigned'=>TRUE,
        ],
        'fecha_subida'=>[
            'type'=>'DATETIME',
            
            
        ],
        'numero_descarga'=>[
            'type'=>'INT',
            'unsigned'=>TRUE,
        ],
        
        'id_categoria'=>[
            'type'=>'INT',
            'constraint'=> 5,
            'unsigned'=>TRUE,
           
        ],
    ]);

    $this->forge->addKey('id', TRUE);
    $this->forge->addForeignKey('id_categoria','categorias','id_categoria','CASCADE','CASCADE');
    $this->forge->createTable('librerias');

        }



        

    public function down()
    {
        $this->forge->dropTable('librerias');
    }
}
