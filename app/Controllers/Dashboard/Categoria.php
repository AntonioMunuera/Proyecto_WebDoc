<?php

namespace App\Controllers\Dashboard;
use App\Models\CategoriaModel;
use App\Controllers\BaseController;
use App\Models\LibreriaModel;

class Categoria extends BaseController
{
    public function index()

    {   
        $categoriaModel = new CategoriaModel;
        return view('Dashboard/categoria/categoria', ['categorias'=> $categoriaModel->findAll()]);
    }


    public function new()
    {
        return view('Dashboard/categoria/crear');
    }

    public function create() {
        helper(['form', 'url']);
        
        if ($this->validate('categorias')) {
            $categoriaModel = new CategoriaModel;
    
            $imagen = $this->request->getFile('imagen');
            if ($imagen->isValid() && !$imagen->hasMoved()) {
                $nombreImagenNuevo = $imagen->getRandomName();
                $imagen->move(FCPATH . 'images/categoria', $nombreImagenNuevo);
            } else {
                return redirect()->back()->with('mensaje', 'No se pudo cargar la imagen')->withInput();
            }
    
            $categoriaModel->insert([
                'nombre' => $this->request->getPost('nombre'),
                'descripcion' => $this->request->getPost('descripcion'),
                'imagen' => $nombreImagenNuevo,
            ]);
    
            session()->setFlashdata('mensaje', 'Datos guardados exitosamente');
            return redirect()->to('/categoria');
        } else {
            session()->setFlashdata([
                'validation' => $this->validator->listErrors()
            ]);
            return redirect()->back()->withInput();
        }
    }

    public function show($id_categoria = null)
{
    // Instanciar modelos
    $categoriaModel = new CategoriaModel;
    $libreriaModel = new LibreriaModel;

    // Obtener la categoría
    $categoria = $categoriaModel->find($id_categoria);
    if (!$categoria) {
        // Si la categoría no existe, puedes redireccionar o mostrar un error.
        return redirect()->back()->with('error', 'Categoría no encontrada.');
    }

    // Obtener las librerías por categoría con paginación
    $librerias = $libreriaModel->where('id_categoria', $id_categoria)->paginate(10); // por ejemplo, 10 items por página

    // Pasar datos a la vista
    echo view('Dashboard/categoria/ver', [
        'categorias' => $categoria,
        'libros' => $librerias,
        'pager' => $libreriaModel->pager // Pasamos también el pager para generar los enlaces en la vista.
    ]);
}



    public function edit($id_categoria = null)
    {
        $categoriaModel = new categoriaModel;
        
       echo view('Dashboard/categoria/editar',[
        'categorias' => $categoriaModel->find($id_categoria)
       ]);
    }

    public function update($id_categoria = null)
    {
        if ($this->validate('categorias')) {
    
            $categoriaModel = new CategoriaModel;
    
            // Manejar la carga de archivos
            $img = $this->request->getFile('imagen');
            if ($img->isValid() && !$img->hasMoved()) {
                $nuevoNombre = $img->getRandomName();
                $img->move(FCPATH . 'images/categoria', $nuevoNombre);
            }
    
            // Preparar datos para la actualización
            $data = [
                'nombre' => $this->request->getPost('nombre'),
                'descripcion' => $this->request->getPost('descripcion'),
            ];
            if (isset($nuevoNombre)) {
                $data['imagen'] = $nuevoNombre;
            }
    
            // Actualizar la categoría
            $categoriaModel->update($id_categoria, $data);
    
        } else {
            session()->setFlashdata('validation', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
    
        session()->setFlashdata('mensaje', 'Datos cambiados exitosamente');
        return redirect()->to('/categoria');
    }
    public function delete($id_categoria = null)
    {
        
        $categoriaModel = new categoriaModel;
        $categoriaModel->find($id_categoria);
       $categoriaModel->delete($id_categoria);

       session()->setFlashdata('mensaje', 'Datos borrados exitosamente');
        return redirect()->back();
    }
}


