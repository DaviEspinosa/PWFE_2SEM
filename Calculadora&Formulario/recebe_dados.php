<html>
<title>Desenvolvendo Websites com PHP</title>
<body>

<?php
$username = $_POST["username"];
$senha = $_POST["senha"];
$nome = $_POST["nome"];
$email = $_POST["email"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];

$erro = 0;

if (strlen($username)<5){
    echo"O username deve possuir no mínimo 5 carcteres.<br>";$erro = 1;
}
if (strlen($senha)<5){
    echo"A senha deve possuir no mínimo 5 caracteres. <br>";$erro = 1;
}



