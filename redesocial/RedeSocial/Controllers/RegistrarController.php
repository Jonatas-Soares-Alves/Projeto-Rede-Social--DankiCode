<?php
    namespace RedeSocial\Controllers;

    class RegistrarController{

        public function index(){
            if(isset($_POST['Enviar'])){
                $nome = $_POST['Nome'];
                $email = $_POST['Email'];
                $senha = $_POST['Senha'];

                $fazer = new \RedeSocial\Utilidades();
                $db = new \RedeSocial\Models\UsuarioModel();

                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $fazer->msg('E-mail inválido!');
                    $fazer->redirect(INCLUIR_PATH.'registrar');

                }elseif(strlen($senha) < 6){
                    $fazer->msg('Senha muito curta! Precisa ter mais de 6 digitos.');
                    $fazer->redirect(INCLUIR_PATH.'registrar');
                }
                elseif($db->emailExists($email)){
                    $fazer->msg('Esse E-mail já existe no banco de dados!');
                    $fazer->redirect(INCLUIR_PATH.'registrar');

                }else{
                    //Registrar usuário
                    $senha = \RedeSocial\Bcrypt::hash($senha); //Crptografa a senha

                    $registrar = \RedeSocial\MySql::connect()->
                    prepare("INSERT INTO usuarios VALUES (null,?,?,?)");

                    $registrar->execute(array($nome, $email, $senha));

                    //Redirecionamento
                    $fazer->msg('Registrado com sucesso!');
                    $fazer->redirect(INCLUIR_PATH);
                }
            }
            \RedeSocial\Views\MainView::render('Registrar');
        }
    }
?>