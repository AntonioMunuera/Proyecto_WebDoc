<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'categorias';
    protected $primaryKey       = 'id_categoria';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id_categoria','nombre','descripcion','slug'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = ['setSlug'];
    protected $afterInsert    = ['setSlug'];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

     /**
     * setSlug Función para establecer el slug a partir del nombre.
     *
     * @param array $data Array de datos que se van a insertar o actualizar.
     * @return array Array modificado con el slug.
     */
    protected function setSlug(array $data)
    {
        if (isset($data['data']['nombre'])) {
            $data['data']['slug'] = url_title($data['data']['nombre'], '-', true); // TRUE convierte el slug a minúsculas
        }

        return $data;
    }
}
