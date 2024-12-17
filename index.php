<?php 

session_start();
date_default_timezone_set('America/Sao_Paulo');
require 'vendor/autoload.php';


define('INC_PATH', 'http://localhost/estudos/customer-management');
define('HOST', 'localhost');
define('DB_NAME', 'customer-management');
define('DB_USER', 'root');
define('DB_PASS', '');


function view($filename) {
    $loadView = str_replace('.', '/', $filename);
    include 'Src/Views/'. $loadView . '.php';
}

function dd(mixed $code) {
    var_dump($code);die;
}