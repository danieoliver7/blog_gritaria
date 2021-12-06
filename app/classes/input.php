<?php

namespace app\classes;

class Input{
    public static function get(string $param, int $filter = FILTER_SANITIZE_STRING): string{
        
        return filter_input(INPUT_GET, $param, $filter);
    }
}