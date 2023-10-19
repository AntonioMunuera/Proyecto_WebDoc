<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categorias extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_categoria' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '255'
            ],

            'descripcion' => [
                'type' => 'TEXT'
            ],

            'slug' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'unique' => true
            ],
            
        ]);
    
        $this->forge->addKey('id_categoria', true);
        $this->forge->createTable('categorias');
    }

    public function down()
    {
        $this->forge->dropTable('categorias');
    }
}
