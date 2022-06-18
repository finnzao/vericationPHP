<?php

$erroNome = "";
$erroSenha = "";
$erroEmail = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['nome'])) {
        $erroNome = "Por favor ,preencha um nome";
        header('Location:index.php');
    } else {
        $nome = limpaPost($_POST['nome']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
            $erroNome = "Apenas letras e espaço brancos";
        }
    }


    if (empty($_POST['email'])) {
        $erroEmail = "Por favor ,preencha um email";
        header('Location:index.php');
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

}

function limpaPost($valor)
{
    $valor = trim($valor);
    $valor = stripslashes($valor);
    $valor = htmlspecialchars($valor);
    return $valor;
}
