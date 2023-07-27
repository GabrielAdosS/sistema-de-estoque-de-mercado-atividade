<?php

session_start();

include 'conexao.php';

$username = filter_input(INPUT_POST, 'username');
$userpassword = filter_input(INPUT_POST, 'userpassword');

$sql = 'SELECT * from usuario where usuario=? and senha=?';
$db = new conexao();
$db_init = $db->getConexao();

$values = $db_init->prepare($sql);
$values->bindValue(1, $username);
$values->bindValue(2, $userpassword);
$values->execute();

if ($values->rowCount()>0) {
    $_SESSION['username'] = $username;
    $_SESSION['userpassword'] = $userpassword;
    header('Location: ../paginas/principal.php');
}else {
    unset($_SESSION['username']);
    unset($_SESSION['userpassword']);
    header('Location: ../index.php');
}

?>