<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Cliente extends ResourceController
{       
        //  Rest methods available to implement and use 
        //  Metodos Rest do Codeigniter 4 disponiveis para implementação e uso 
        //  
        // $routes->get('cliente/new',             'Cliente::new');
        // $routes->post('cliente',                'Cliente::create');
        // $routes->get('cliente',                 'Cliente::index');
        // $routes->get('cliente/(:segment)',      'Cliente::show/$1');
        // $routes->get('cliente/(:segment)/edit', 'Cliente::edit/$1');
        // $routes->put('cliente/(:segment)',      'Cliente::update/$1');
        // $routes->patch('cliente/(:segment)',    'Cliente::update/$1');
        // $routes->delete('cliente/(:segment)',   'Cliente::delete/$1');
    
        protected $modelName = 'App\Models\UsuarioModel';
        protected $format    = 'json';
        
        
        
        public function index()
        {
                return $this->respond($this->model->findAll());
        }
        
        
        // // GET
         public function show($id = null)
         {

                 return $this->respond($this->model->find($id));
         }


        // GET
//        public function show($nome = "")
//        {
//
//                $db      = \Config\Database::connect();
//                $builder = $db->table('usuarios');
//
//                $resp = $builder->where('nome', $nome)
//                                ->get()
//                                ->getFirstRow();
//
//                return $this->respond($resp);
//        }

        // POST
        public function create()
        {
             $dados   =  json_decode($this->request->getBody());
             $request = null;
             $dadosArr = (array) $dados;
            
             if (isset($dadosArr['id'])){
                
                 $request = $this->model->update((int)$dadosArr['id'], $dadosArr );
                 return $this->respond($request);
                
              } else {
                 
                  $request = $this->model->save( $dadosArr );
                  return $this->respond($request);
                 
                 }
                
             
        }
        
        
//           // UPDATE
//            public function update($id = null){
//                 $dados   =  json_decode($this->request->getBody());
//
//                $request = $this->model->save((array) $dados);
//
//                return $this->respond($request);
//            }

            
        // DELETE
        public function delete($id = null)
        {

                return $this->respond($this->model->delete($id));
        }
        

}
