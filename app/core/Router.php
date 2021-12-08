<?php

namespace App\Core;

class Router{   

    private array $uriData;
    private string $controller;
    private string $method;
    private array $params;


    
    public function __construct(){
        $this->controller   = 'Home';
        $this->method       = 'index';
        $this->params       = [];

        $this->format();

        $this->run();

       
        
    }

    private function format() {

        $uri = $_SERVER['REQUEST_URI'];

        if (strpos($uri, '?') > 0) 
            $uri = substr($uri, 0, strpos($uri, '?'));
        

        
        
        $ex = explode('/', $uri);
        

        if (!is_array($ex)) {
            return;
        }

        $ex = array_values(array_filter($ex));
        

        for ($i=0; $i < REMOVE_INDEX ; $i++) { 
            unset($ex[$i]);
        }

        $this->uriData = array_values($ex);

        
    }

    private function run(){
      $controller = $this->getController();
      $method = $this->getMethod($controller);  

      $params = $this->getParams();

      call_user_func_array([
          (new $controller),
          $method
      ],  $params );

    
    }   

    public function getController(){

       
        if (isset($this->uriData[0])) {
           $cont = $this->uriData[0];
           $cont = 'App\\Site\\Controller\\' . ucfirst($cont) . 'Controller';

            if(class_exists($cont)){
             return $cont;
                }

                }

          return 'App\\Site\\Controller\\' . ucfirst($this->controller) . 'Controller';

        

      //  $this->controller = $this->uriData;
    }


    public function getMethod(string $controllerPath){

        $meth = $this->method;


        if (isset($this->uriData[1])) 
            $meth = $this->uriData[1];
                 

                if (method_exists($controllerPath, $meth)) 
                return $meth;


            return $this->method;
              
                   
    }   

    public function getParams(){
        if (count($this->uriData) <= 2) {
            return [];
            }
            $params = [];
            for ($i=2; $i < count($this->uriData); $i++) { 
             $params[] = $this->uriData[$i];
            }
           
          
            return $params;
    }
     
}