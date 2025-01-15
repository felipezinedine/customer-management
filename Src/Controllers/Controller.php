<?php

namespace Src\Controllers;

class Controller 
{
    public static function view(string $view, array $data = []) {
        extract($data);
        $file_path = 'Src/Views/' . $view . '.php';

        if(file_exists($file_path)) {
            require $file_path;
        } else {
            echo 'View não encontrada';
        }
    }

    public static function redirect ($routeRedirect) {
        header('Location: ' . $routeRedirect);
        die;
    }
}