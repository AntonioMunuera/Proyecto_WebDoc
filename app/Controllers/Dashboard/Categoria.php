<?php

namespace App\Controllers\Dashboard;
use App\Models\CategoriaModel;
use App\Controllers\BaseController;

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

    public function create()
    {
        if($this->validate('categorias')){
        $categoriaModel = new CategoriaModel;

        $categoriaModel->insert([
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            
            

        ]
    );
}else{
    session()->setFlashdata([
        'validation' => $this->validator->listErrors()
        
    ]);
    return redirect()->back()->withInput();
}
    session()->setFlashdata('mensaje', 'Datos guardados exitosamente');
    return redirect()->to('/dashboard/categoria');
    }

    public function show($id_categoria = null)
    {
        // Mostrar detalles del libro
        $categoriaModel = new categoriaModel;
        
       echo view('Dashboard/categoria/ver',[
        'categorias' => $categoriaModel->find($id_categoria)
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
        if($this->validate('categorias')){

        
        $categoriaModel = new categoriaModel;

        $categoriaModel->update($id_categoria,[
            'nombre' => $this->request->getPost('nombre'),
            'descripcion' => $this->request->getPost('descripcion'),
            
            

        ]
    
    );
}else{
    session()->setFlashdata([
        'validation' => $this->validator->listErrors()
        
    ]);
    return redirect()->back()->withInput();
}
    session()->setFlashdata('mensaje', 'Datos cambiados exitosamente');
    return redirect()->to('/dashboard/categoria');
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


