<?php 

namespace Src\Utilities;

class Application 
{
    private $controller;

    private function processClass() {
        $loadName = 'App\\Controllers\\';
        @$url = explode('/', $_GET['url']); //@ para não aparecer error
        if(!empty($url[0])) {
            $loadName .= ucfirst(strtolower($url[0])); // ucfirst para deixar a primeira letra maiuscula
        } else {
            $loadName .= 'Home';
        }
        $loadName .= 'Controller';

        if(file_exists($loadName . '.php')) {
            $this->controller = new $loadName;
        } else {
            include 'Src/Views/errors/notFound.php';
            die();
        }
    }

    public function run() {
        $this->processClass();
        $this->controller->index();
    }
}