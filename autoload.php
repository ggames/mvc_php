<?php
   
   spl_autoload_register(function ($clase) {
    
    $ruta = '../'. str_replace("\\","/", lcfirst($clase)). ".php";

    
    if(file_exists($ruta)){
        require_once $ruta;
    }else {
        die("No se pudo cargar la clase $clase");
    }
   });