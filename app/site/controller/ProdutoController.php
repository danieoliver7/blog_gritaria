<?php

namespace App\Site\controller;

use App\Core\Controller;

class ProdutoController extends Controller{

 
    public function index(){
    
    }

    public function verificar($idProduto, $quantidadeProduto = '10'){
        echo 'ID produto: '. $idProduto . '<br>';
        echo 'Quantidade Produto: ' . $quantidadeProduto . '<br>';

        $this->view('produto.index', [
            'idProduto' => $idProduto,
            'quantidadeProduto' => $quantidadeProduto
        ]);
    }
}