<?php

function dd($param = null){

    echo "<pre>";
    print_r($param);
    echo "</pre>";

    die();
}

function redirect(string $url){
    header('Location: '. $url);
}