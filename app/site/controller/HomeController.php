<?php

namespace App\Site\controller;

use App\Core\Controller;

/**
 * CARREGA A PAGINA INICIAL DO SITE
 */

class HomeController extends Controller{
    public function index(){
        return $this->view('home.index');
    }
}