<?php
    namespace RedeSocial\Views;

    class MainView{

        public static function render($nomeArquivo){
            include('Pages/'.$nomeArquivo.'.php');
        }
    }
?>