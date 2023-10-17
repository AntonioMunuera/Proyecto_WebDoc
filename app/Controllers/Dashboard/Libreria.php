<?php

namespace App\Controllers\Dashboard;
use App\Controllers\BaseController;
use App\Models\LibreriaModel;
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
        return view('Dashboard/libreria', ['libros'=> $libreriaModel->findAll()]);
    }


    public function new()
    {
        return view('Dashboard/crear');
    }

    public function create()
    {
        $libreriaModel = new LibreriaModel;

        $libreriaModel->insert([
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            
            

        ]
    );

    return redirect()->to('/dashboard/libreria');

    }

    public function show($id = null)
    {
        // Mostrar detalles del libro
        $libreriaModel = new LibreriaModel;
        
       echo view('Dashboard/ver',[
        'libros' => $libreriaModel->find($id)
       ]);
    }

    public function edit($id = null)
    {
        $libreriaModel = new LibreriaModel;
        
       echo view('Dashboard/editar',[
        'libros' => $libreriaModel->find($id)
       ]);
    }

    public function update($id = null)
    {
    
        $libreriaModel = new LibreriaModel;

        $libreriaModel->update($id,[
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),
            
            

        ]
    );
    return redirect()->to('/dashboard/libreria');
    }

    public function delete($id = null)
    {
        
        $libreriaModel = new LibreriaModel;
        $libreriaModel->find($id);
       $libreriaModel->delete($id);

         
        return redirect()->back();
    }
}
