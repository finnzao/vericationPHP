<?php
session_start();
#unset($_SESSION['NAMEofSESSION']);
session_destroy();
header('Location: index.php');
exit();
