<?php 

session_start();
date_default_timezone_set('America/Sao_Paulo');

require 'vendor/autoload.php';
require 'Src/Utilities/config.php';

$app = new Src\Utilities\Application();
$app->run();