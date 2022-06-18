<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="login_screen">
        <div class="login_box">
            <h1>Login</h1>
            <?php if (isset($_SESSION['not_authorized'])) :
            ?>
                <div class="notification is-danger">
                    <p>ERRO: Usuário ou senha inválidos.</p>
                </div>

            <?php
            endif;
            unset($_SESSION['not_authorized']);
            ?>
            <form action="auth.php" method="POST">

                <div class="field">
                    <input name="usuario" type="text" placeholder="Endereço de e-mail">
                </div>

                <div class="field">
                    <input name="senha" type="password" placeholder="Senha">
                </div>

                <button type="submit" class="button_login">Entrar</button>
                <div class="register_box">Não estar registrado?
                    <a href="register.php">Clique aqui</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>