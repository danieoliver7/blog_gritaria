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
        
    }

    private function format(): array {

        $ex = explode('/', $_SERVER['REQUEST_URI']);
        

        if (!is_array($ex)) {
            return;
        }

        $ex = array_values(array_filter($ex));
        

        for ($i=0; $i < REMOVE_INDEX ; $i++) { 
            unset($ex[$i]);
        }

        $this->uriData = array_values($ex);

        dd($ex); 
        
    }

    private function run(){

    }
     
}