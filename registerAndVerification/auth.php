<?php
session_start();

include("conexao.php");
$user = $_POST['usuario'];
$password = $_POST['senha'];


if (empty($_POST['nome'])) {
    $erroNome = "Por favor ,preencha um nome";
} else {
    $nome = limpaPost($_POST['nome']);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $nome)) {
        $erroNome = "Apenas letras e espaço brancos";
    }
}

if (empty($user) || empty($password)) {
    header('Location:index.php');
    $_SESSION['not_authorized'] = true;
    exit();
}


$usuario = mysqli_real_escape_string($conexao, $user);
$senha = mysqli_real_escape_string($conexao, $password);

$query = "select id,usuarios from users where usuarios ='{$usuario}' and senhas = md5('{$senha}');";

$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: home.php');
    exit();
} else {
    $_SESSION['not_authorized'] = true;
    header('Location:index.php');
    exit();
}
