<?php

session_start();

include 'conexao.php';

$username = filter_input(INPUT_POST, 'username');
$userpassword = filter_input(INPUT_POST, 'userpassword');

$sql = 'INSERT into usuario(usuario, senha) values (?,?)';

$db = new conexao();
$db_init = $db->getConexao();

$values = $db_init->prepare($sql);
$values->bindValue(1, $username);
$values->bindValue(2, $userpassword);

$result = $values->execute();

if ($result) {
    header('Location: ../index.php');
}

?>