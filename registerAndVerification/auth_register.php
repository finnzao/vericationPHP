<?php
include("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

$senha = $_POST['senha'];

if (empty($nome) || empty($senha)) {
    echo "Error";
    exit();
}


if (isset($_POST['cadastrar'])) {
    $querry = mysqli_query($conexao, "INSERT INTO users (usuarios,senhas) VALUES ('$nome',md5('$senha'))");
    if ($querry) {
        header('Location:register.php');
    } else {
        echo "Algo deu errado";
    }
}
