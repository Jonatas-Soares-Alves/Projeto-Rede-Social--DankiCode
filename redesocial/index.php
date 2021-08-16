<?php
    session_start();
    require('vendor/autoload.php');

    define('INCLUIR_PATH_STATIC','http://localhost/redesocial/RedeSocial/Views/Pages/');
    define('INCLUIR_PATH','http://localhost/redesocial/');
    
    $app = new RedeSocial\Application();

    $app->run();
?>