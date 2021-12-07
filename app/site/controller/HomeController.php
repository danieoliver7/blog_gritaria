<?php

namespace App\Site\controller;

use App\Core\Controller;

class Home{
    public function index(){
        http_response_code(404);
    }
}