<?php
$prod = false;
/**
 * prod.php => produção
 * local.php => QA|LOCALHOST
 * 
 */


$file = $prod ? 'prod.php' : 'local.php';

require_once('env/'. $file);