<?php 

define('INC_PATH', 'http://localhost/estudos/customer-management');
define('INC_PATH_ASSETS', INC_PATH . '/Src/Views/assets/');
define('HOST', 'localhost');
define('DB_NAME', 'customer-management');
define('DB_USER', 'root');
define('DB_PASS', '');

function dd(mixed $code) {
    var_dump($code);die;
}