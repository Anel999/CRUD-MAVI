<!-- // esta funcion obtiene el nombre de la classes -->
<?php
   
    spl_autoload_register(function($clase){

        $archivo= __DIR__."/".$clase.".php";
        $archivo=str_replace("\\","/",$archivo);


        // saber si ese archivo exixte 
        if(is_file($archivo)){
            require_once $archivo; // para incluir el archivo 
        } 
    });