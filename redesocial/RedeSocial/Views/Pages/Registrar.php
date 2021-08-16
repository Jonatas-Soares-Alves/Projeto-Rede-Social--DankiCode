<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo INCLUIR_PATH_STATIC ?>Estilos/style.css">
    <link rel="icon" type="image/png" href="<?php echo INCLUIR_PATH_STATIC ?>Imagens\SharkBaitFavIcon.png">
    <title>Cadastre-se SharkBait</title>
</head>
<body>
    <div class="sideBar"></div>

    <div class="wrapper">

        <div class="logo-text-container">
            <img class="Logo" src="<?php echo INCLUIR_PATH_STATIC ?>Imagens\SharkBaitLogo.png" alt="SharkBait Logo">
            <p>Conecte-se com seus amigos e expanda seus aprendizados com a rede social SharkBait.</p>
        </div>

        <div class="form">
            <h3>Insira seus dados:</h3>
            <form method="POST">
                <input type="text" name="Nome" class="input-nome" placeholder="Nome" required>
                <input type="email" name="Email" class="input-email" placeholder="E-mail" required>
                <input type="password" name="Senha" class="input-senha" placeholder="Senha" required>
                <input type="submit" name="Enviar" class="submit" Value="Criar Conta">
            </form>
        </div>

    </div>
</body>
</html>