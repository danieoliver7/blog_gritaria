<?php

namespace App\Classes;

/**
 * GERENCIA O TIPO DE ENTRADA GET E POST
 */


class Input{
    /**
 * Faz uma requisição do tipo GET 
 * 
 * @param string $param Nome da variavel ou da query
 * @param int $filter Constate com o o filtro da variavel
 * @return string Retorna False se não encontrar o conteudo 
 * 
 */
    public static function get(string $param, int $filter = FILTER_SANITIZE_STRING): string{
        
        return filter_input(INPUT_GET, $param, $filter);
    }



    /**
 * Faz uma requisição do tipo POST 
 * 
 * @param string $param Nome da variavel ou da query
 * @param int $filter Constate com o o filtro da variavel
 * @return string Retorna False se não encontrar o conteudo 
 * 
 */

    public static function post(string $param, int $filter = FILTER_SANITIZE_STRING): string{
        
        return filter_input(INPUT_POST, $param, $filter);
    }
}