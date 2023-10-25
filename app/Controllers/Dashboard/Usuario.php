<?php

namespace App\Controllers\Dashboard;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\I18n\Time;

class Usuario extends BaseController
{
    

    function login() {

        echo view ('dashboard/login');
        
    }
    function login_post() {

        $usuarioModel = new UsuarioModel();
        
        $correo = $this->request->getPost('correo');
        $contrasena = $this->request->getPost('contrasena');

        $usuario = $usuarioModel->select('id,usuario,correo,contrasena,rol')
        ->orwhere('correo',$correo)
        ->orwhere('usuario',$correo)
        ->first();

        if (!$usuario) {

            return redirect()->back()->with('mensaje','Usuario y/o contraseña incorretos');
    }

    if ($usuarioModel->contrasenaVerificar($contrasena,$usuario->contrasena)){
        unset($usuario->contrasena);
        session()->set('usuario',$usuario);
        
        return redirect()->to('/dashboard/inicio');
    }
    
    return redirect()->back()->with('mensaje','Usuario y/o contraseña incorretos');
}

function register() {

    echo view ('dashboard/register');
    
}
function register_post() {

    $usuarioModel = new UsuarioModel();


    if ($this->validate('usuarios')) {
        $usuarioModel->insert([
        'usuario' => $this->request->getPost('usuario'),
        'correo' => $this->request->getPost('correo'),
        'contrasena' => $usuarioModel->contrasenaHash($this->request->getPost('contrasena')),
        'fecha_creacion'=> Time::now()
        ]);

        return redirect()->to(route_to('usuario.login'))->with('mensaje','Registro completado correctamente');
    }
    session()->setFlashdata([
        'validation'=>$this->validator
    ]);
    return redirect()->back()->withInput();


}
   function logout() {

    session()->destroy();

    return redirect()->to(route_to('usuario.login'));
    
   }
}