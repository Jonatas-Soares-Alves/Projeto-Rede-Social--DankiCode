<?php
    namespace RedeSocial\Models;

    class UsuarioModel{
        public static function emailExists($email){
            $pdo = \RedeSocial\MySql::connect();
            $verificar = $pdo->prepare("SELECT email from usuarios WHERE email = ?");
            $verificar->execute(array($email));

            if($verificar->rowCount() == 1){
                //Email Existe.
                return true;
            }else{
                //Email não existe
                return false;
            }
        }
    }
?>