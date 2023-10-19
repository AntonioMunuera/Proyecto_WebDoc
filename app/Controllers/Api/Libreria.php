<?php
namespace App\Controllers\Api;


use CodeIgniter\RESTful\ResourceController;

class Libreria extends ResourceController{
    protected $modelName = 'App\Models\LibreriaModel';
    protected $format = 'json';

    public function index() 
    
    {

        return $this->respond($this->model->findAll());
        
    }

    public function create() 
    
    {

        if($this->validate('librerias')){
    
            $id = $this->model->insert([
                'titulo' => $this->request->getPost('nombre'),
                'descripcion' => $this->request->getPost('descripcion'),
                
                
    
            ]
        );
    }else{
        return $this->respond($this->validator->getErrors(),400);
        
        
    }
return $this->respond($id);




}

public function update($id = null)
{
    if($this->validate('librerias')){


         $this->model->update($id,
        [

            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion'),

        ]
    
    );
}   else{
    
        return $this->respond($this->validator->getErrors(),400);
    
    
}
        return $this->respond($id);


}


public function delete($id = null)
    {
        
       
        $this->model->find($id);
        $this->model->delete($id);

        return $this->respond('eliminado');
    }
}









?>