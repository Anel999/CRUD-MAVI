<?php

    require_once "./config/app.php";
    require_once "./autoload.php";
    require_once "./app/views/inc/session_start.php";

    //obtener la variable GET 
 /*---------- Iniciando sesion ----------*/
 require_once "./app/views/inc/session_start.php";
// ARRRAY PARA LA URL 
 if(isset($_GET['views'])){
     $url=explode("/", $_GET['views']);
 }else{
     $url=["login"];
 }
        
 ?>

 <!DOCTYPE html>
 <html lang="es">
 <head>
     <?php require_once "./app/views/inc/head.php"; ?>
 </head>
 <body>
     <?php
         use app\controllers\viewsController;
        
        //  INSTANCIAS DE VIEW CONTROLLER para que pueda usar los metodos y controles 
        //  $insLogin = new loginController();
 
        //    $viewsController= new viewsController();
        //    $vista=$viewsController->obtenerVistasControlador($url[0]);


//  condicional doble if y else 
         if($vista=="login" || $vista=="404"){
             require_once "./app/views/content/".$vista."-view.php";
         }else{
            require_once "./app/views/inc/navbar.php";
             require_once $vista;
         }
         require_once "./app/views/inc/script.php"; 
     ?>
     </body>
</html>