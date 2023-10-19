<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use App\Models\LibreriaModel;
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
    $libros['datos'] = $libreriaModel->paginate(10); // 10 es el número de registros por página
    $libros['pager'] = $libreriaModel->pager;
    $libros['libros'] = $libreriaModel->findAll();
    return view('Dashboard/Libreria/libreria', $libros);
}


    
    public function new()
    {
        return view('Dashboard/Libreria/crear');
    }

    public function create()
    {
        if($this->validate('librerias')){
        $libreriaModel = new LibreriaModel;

        $libreriaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            'fecha_subida' => Time::now()
            
            

        ]
    );
}else{
    session()->setFlashdata([
        'validation' => $this->validator->listErrors()
        
    ]);
    return redirect()->back()->withInput();
}
    session()->setFlashdata('mensaje', 'Datos guardados exitosamente');
    return redirect()->to('/dashboard/libreria');
    }

    public function show($id = null)
    {
        // Mostrar detalles del libro
        $libreriaModel = new LibreriaModel;
        
       echo view('Dashboard/Libreria/ver',[
        'libros' => $libreriaModel->find($id)
       ]);
    }

    public function edit($id = null)
    {
        $libreriaModel = new LibreriaModel;
        
       echo view('Dashboard/Libreria/editar',[
        'libros' => $libreriaModel->find($id)
       ]);
    }

    public function update($id = null)
    {
        if($this->validate('librerias')){

        
        $libreriaModel = new LibreriaModel;

        $libreriaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
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
    return redirect()->to('/dashboard/libreria');
    }

    public function delete($id = null)
    {
        
        $libreriaModel = new LibreriaModel;
        $libreriaModel->find($id);
       $libreriaModel->delete($id);

       session()->setFlashdata('mensaje', 'Datos borrados exitosamente');
        return redirect()->back();
    }
}
