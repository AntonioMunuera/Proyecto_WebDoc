<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class LibreriaSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('librerias')->where('id >=' ,1)->delete();
        for ($i = 0; $i < 20; $i++) {
        $this->db->table('librerias')->insert(

            [
                'titulo'=> "Librera $i",
                'descripcion'=> "Breve descripcion de Libreria $i",
                'fecha_subida' => Time::now(),
            ]
            );
    }
}
}