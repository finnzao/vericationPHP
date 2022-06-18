<?php
$s = 0;
$erroNome = "";
$erroSenha = "";
$erroEmail = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nome'])) {
        $erroNome = "Por favor ,preencha um nome";
    } else {
        $nome = limpaPost($_POST['nome']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
            $erroNome = "Apenas letras e espaço brancos";
        }
    }


    if (empty($_POST['email'])) {
        $erroEmail = "Por favor ,preencha um email";
    } else {
        $email = limpaPost($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $erroEmail = "E-mail inválido";
        }
    }


    $senha = limpaPost($_POST['senha']);
    if (strlen($senha) < 6) {
        $erroSenha = "Mínimo de 6 digitos ";
    }




    // if(empty($_POST['repete_senha'])){
    //     $erroSenha="Por favor ,preencha a senha";
    // }else{
    //     $repete_senha=limpaPost($_POST['repete_senha']);
    //     if ($repete_senha==$senha){
    //         $erroRepeteSenha="Senhas diferentes ";

    //     }
    // }

    header('Location:home.php');
}

function limpaPost($valor)
{
    $valor = trim($valor);
    $valor = stripslashes($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="login_screen">
        <div class="login_box">
            <h1>Login</h1>
            <form method="POST">

                <div class="field">
                    <input name="nome" type="text" placeholder="Nome..">
                    <span class=error>
                        <?php
                        echo $erroNome;
                        ?>
                    </span>
                </div>

                <div class="field">
                    <input name="senha" type="password" placeholder="Senha">
                    <span class=error>
                        <?php
                        echo $erroSenha;
                        ?>
                    </span>
                </div>


                <div class="field">
                    <input name="email" type="email" placeholder="Seu email">
                    <span class=error>
                        <?php
                        echo $erroEmail;
                        ?>
                    </span>
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