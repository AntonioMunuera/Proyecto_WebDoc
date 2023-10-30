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
    
        $usuario = $usuarioModel->select('id, usuario, correo, contrasena, rol, imagen') // Asegúrate de seleccionar la columna de la imagen
            ->orwhere('correo', $correo)
            ->orwhere('usuario', $correo)
            ->first();
    
        if (!$usuario) {
            return redirect()->back()->with('mensaje', 'Usuario y/o contraseña incorrectos');
        }
    
        if ($usuarioModel->contrasenaVerificar($contrasena, $usuario->contrasena)) {
            unset($usuario->contrasena);
            
            // Guardamos la información del usuario en la sesión
            session()->set('usuario', $usuario);
            // También puedes guardar solo la imagen si prefieres
            // session()->set('usuario_imagen', $usuario->imagen);
            
            return redirect()->to('/inicio');
        }
    
        return redirect()->back()->with('mensaje', 'Usuario y/o contraseña incorrectos');
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

   public function mostrarPerfil()
   {
       // Obtén el objeto de usuario almacenado en la sesión
       $usuario = session()->get('usuario');
       
       if (!$usuario) {
           return redirect()->to('/usuario/login');
       }
   
       $usuarioModel = new UsuarioModel();
       
       // Obtén el usuario de la base de datos basado en el ID
       $usuarioDb = $usuarioModel->find($usuario->id);
   
       // Verifica que el usuario se haya obtenido correctamente
       if (!$usuarioDb) {
           return redirect()->to('/usuario/login'); 
       }
   
       // Muestra la vista y pasa el usuario como un objeto
       return view('/dashboard/Miperfil', ['usuario' => $usuarioDb]);
   }

  
   public function actualizarPerfil()
{
    $usuarioModel = new UsuarioModel();
    $usuarioSesion = session()->get('usuario');

    $validation = \Config\Services::validation();
    $validation->setRule('usuario', 'Usuario', "required|min_length[5]|max_length[20]|is_unique[usuarios.usuario,id,{$usuarioSesion->id}]");
    $validation->setRule('correo', 'Correo', "valid_email|required|is_unique[usuarios.correo,id,{$usuarioSesion->id}]");

    if ($this->validate($validation->getRules())) {
        $imagen = $this->request->getFile('imagen');
        $datosActualizar = [
            'usuario' => $this->request->getPost('usuario'),
            'correo' => $this->request->getPost('correo'),
        ];
        if ($imagen->isValid() && !$imagen->hasMoved()) {
            $nuevoNombre = $imagen->getRandomName();
            if ($imagen->move(FCPATH . 'images/usuario', $nuevoNombre)) {
                $datosActualizar['imagen'] = $nuevoNombre;
            } else {
                return redirect()->back()->with('mensaje', 'Hubo un problema al cargar la imagen.')->withInput();
            }
        }

        $usuarioModel->update($usuarioSesion->id, $datosActualizar);

        // Actualiza la información del usuario en la sesión
        $usuarioSesion->usuario = $datosActualizar['usuario'];
        $usuarioSesion->correo = $datosActualizar['correo'];
        if (isset($datosActualizar['imagen'])) {
            $usuarioSesion->imagen = $datosActualizar['imagen'];
        }
        session()->set('usuario', $usuarioSesion);
        
        return redirect()->to('/usuario/mi-perfil')->with('mensaje', 'Cambios realizados con éxito');
}
}
public function enviarMensaje()
{
    $nombre = $this->request->getPost('nombre');
    $correo = $this->request->getPost('email');
    $mensaje = $this->request->getPost('mensaje');

    $para = 'destino@correo.com'; // Reemplaza esto con la dirección de correo a la que quieras enviar el mensaje
    $asunto = 'Nuevo mensaje de ' . $nombre;

    $cabeceras = 'Para: ' . $correo . "\r\n" .
        'Responder a: ' . $correo . "\r\n";
        

    if(mail($para, $asunto, $mensaje, $cabeceras)) {
        return redirect()->back()->with('mensaje', 'Mensaje enviado con éxito');
    } else {
        return redirect()->back()->with('error', 'Hubo un problema al enviar el mensaje');
    }
}
}