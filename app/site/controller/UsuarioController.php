<?php

namespace App\Site\Controller;
use App\Core\Controller;

class UsuarioController extends Controller{

    public function __construct(){
     
    }


    public function index(){
        echo 'Mtodo index';
    }

    public function teste(){
        echo 'teste';
    }

    public function message(string $msg){
        echo $msg;
    }

   
}