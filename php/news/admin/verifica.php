<?php
sessin_start();

//verifica se o usuário NÂO está logado
if(!isset($_SESSION['login'])) {
    header('Location: index.php');
    exit();
}

?>