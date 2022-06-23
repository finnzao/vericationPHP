<?php
session_start();
if (!$_SESSION['usuario']) {
    header('Location :index.php');
    exit();
}

?>

<h2>HI <?php echo $_SESSION['usuario'] ?></h2>
<h2><a href="logout.php">Sair</a></h2>