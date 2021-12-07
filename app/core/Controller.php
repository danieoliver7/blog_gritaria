<?php

namespace App\Core;

/**
 * View carrega uma pagina de template do twig  a partir do diretorio com o nome especifico
 * 
 * 
 * @param string $page
 * @param array $params
 * @return void
 * 
 */
class Controller{

    protected function view(string $page, array $params = []){

        $page = str_replace('.', '/', $page);
        $page .= '.twig.php';
        
        $loader = new \Twig\Loader\FilesystemLoader('../App/Site/View');

      
       
        $twig = new \Twig\Environment($loader);

        echo $twig->render($page, $params);
    }
}