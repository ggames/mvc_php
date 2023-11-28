<?php

namespace App\Controllers;

class Controller
{

    public function view($route, $data = [])
    {
       // Destructurar el array
        extract($data);

     
        $route = str_replace('.', '/', $route);

        $file = "../resources/views/{$route}.php";
        if (file_exists($file)) {

            ob_start();
            include $file;
            $content = ob_get_clean();

            return $content;
        } else {
            return "El archivo NO existe";
        }
    }

    public function redirect($route){
           header("Location: {$route}");        
    }
}
