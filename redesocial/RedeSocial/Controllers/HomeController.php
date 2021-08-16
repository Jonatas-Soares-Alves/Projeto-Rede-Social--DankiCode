<?php
    namespace RedeSocial\Controllers;

    class HomeController{

        public function index(){
            $Show = new \RedeSocial\Views\MainView();
            
            if(isset($_SESSION['login'])){
                //Renderizar home do usuário.
                $Show->render('Home');
            }else{
                //Renderizar criar conta.
                $Show->render('Login');
            }
        }
    }
?>