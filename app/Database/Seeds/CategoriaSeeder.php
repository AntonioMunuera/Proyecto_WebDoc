<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class CategoriaSeeder extends Seeder
{
    public function run()
    {
        $this->db->table('categorias')->where('id_categoria >=', 1)->delete();

        for ($i = 0; $i < 20; $i++) {
            $nombre = "Categorias $i";
            $slug = url_title($nombre, '-', true);

            $this->db->table('categorias')->insert(
                [
                    'nombre' => $nombre,
                    'descripcion' => "Breve descripcion de Categorias $i",
                    'slug' => $slug
                ]
            );
        }
    }
}
