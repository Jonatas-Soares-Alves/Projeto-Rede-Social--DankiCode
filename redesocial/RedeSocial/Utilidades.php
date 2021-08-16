<?php

    namespace RedeSocial;

    class Utilidades{
        public static function redirect($url){
            echo '<script>window.location.href="'.$url.'"</script>';
            die();
        }

        public static function msg($text){
            echo '<script>alert("'.$text.'");</script>';
        }
    }
?>