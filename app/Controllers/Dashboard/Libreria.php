<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use App\Models\ComentarioModel;
use App\Models\LibreriaModel;
use App\Models\CategoriaModel;
use App\Models\UsuarioModel;
use CodeIgniter\I18n\Time;

/**
 * Summary of LibreriaController
 */
class Libreria extends BaseController
{
    /**
     * Summary of index
     * @return string
     */
    public function index()
    {   
        $libreriaModel = new LibreriaModel;
    
        // Join con la tabla categorias y seleccionar todos los campos de ambas tablas.
        $libreriaModel->select('librerias.*, categorias.nombre AS categoria')
                      ->join('categorias', 'categorias.id_categoria = librerias.id_categoria');
    
        $data['libros'] = $libreriaModel->paginate(10);
        $data['pager'] = $libreriaModel->pager;
    
        return view('Dashboard/Libreria/libreria', $data);
    }


    
    public function new()
    {
        $categoriaModel = new CategoriaModel;
        return view('Dashboard/Libreria/crear',[
            'libreria'=> new LibreriaModel(),
            'categoria'=> $categoriaModel->find()

        ]);

    }

    public function create()
    {
        if($this->validate('librerias')){
        $libreriaModel = new LibreriaModel;

        $libreriaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'fecha_subida' => Time::now(),
            'id_categoria' => $this->request->getPost('id_categoria'),
            
            

        ]
    );
}else{
    session()->setFlashdata([
        'validation' => $this->validator->listErrors()
        
    ]);
    return redirect()->back()->withInput();
}
    session()->setFlashdata('mensaje', 'Datos guardados exitosamente');
    return redirect()->to('/libreria');
    }

    public function show($id = null)
    {
        // Modelos
        $libreriaModel = new LibreriaModel;
        $comentarioModel = new ComentarioModel;
        $usuarioModel = new UsuarioModel;
        // Obteniendo datos
        $libros = $libreriaModel->find($id);
        $comentarios = $comentarioModel->getComentariosConUsuario($id);
        $usuarios = $usuarioModel->find($id);
        // Pasando datos a la vista
        echo view('Dashboard/Libreria/ver', [
            'libros' => $libros,
            'comentarios' => $comentarios,
            'usuarios' => $usuarios
        ]);
    }
    public function agregar()
    {
        $comentarioModel = new ComentarioModel();
    
        // Verificar si el usuario está en la sesión
        $usuario = session()->get('usuario');
        if ($usuario && isset($usuario->id)) {
            $data = [
                'id_libro' => $this->request->getPost('id_libro'),
                'id_usuario' => $usuario->id,
                'contenido' => $this->request->getPost('contenido'),
                'fecha_publicacion' => Time::now(),
            ];
    
            $comentarioModel->insert($data);
    
            return redirect()->to('/libreria/ver/'. $data['id_libro']);
        } else {
            session()->setFlashdata('mensaje', 'Debes estar logueado para comentar');
            return redirect()->to(route_to('usuario.login'));
        }
    }
    public function edit($id = null)
    {
        $libreriaModel = new LibreriaModel;
        $categoriaModel = new CategoriaModel;
       echo view('Dashboard/Libreria/editar',[
        'libros' => $libreriaModel->find($id),
        'categoria' => $categoriaModel->find()
       ]);
    }

    public function update($id = null)
    {
        if($this->validate('librerias')){

        
        $libreriaModel = new LibreriaModel;

        $libreriaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'id_categoria' => $this->request->getPost('id_categoria'),
            

        ]
    
    );
}else{
    session()->setFlashdata([
        'validation' => $this->validator->listErrors()
        
    ]);
    return redirect()->back()->withInput();
}
    session()->setFlashdata('mensaje', 'Datos cambiados exitosamente');
    return redirect()->to('/libreria');
    }

    public function delete($id = null)
    {
        
        $libreriaModel = new LibreriaModel;
        $libreriaModel->find($id);
       $libreriaModel->delete($id);

       session()->setFlashdata('mensaje', 'Datos borrados exitosamente');
        return redirect()->back();
    }


    public function mostrarLibreriasPorCategoria($categoriaName) {
        $libreriaModel = new LibreriaModel;
        $data['librerias'] = $this->LibreriaModel->getLibreriasByCategoria($categoriaName);
        return view('/categoria/ver/', $data);
    }
}
