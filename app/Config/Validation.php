<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];

    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------



   public $librerias = [
    'titulo' => 'required|min_length[3]|max_length[255]',
    'descripcion' => 'required|min_length[3]|max_length[2000]'
   ];

   public $usuarios = [
    'usuario' => 'is_unique[usuarios.usuario]|required|min_length[5]|max_length[20]',
    'correo' => 'valid_email|required|is_unique[usuarios.correo]',
    'contrasena' => 'required|min_length[5]|max_length[30]'
   ];

}
