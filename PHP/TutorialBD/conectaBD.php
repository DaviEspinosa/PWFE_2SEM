<?php
//endereço
//nome do BD
//usuário
//senha
$endereco ='localhost';
$banco ='teste';
$usuario ='root';
$senha ='';

try {
    //sgbd:host;port;dbname
    //usuario
    //senha
    //errmode
    $pdo = new PDO("PgSql:host=$endereco;port5432;dbname=$banco",$usuario,$senha,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

    echo "Conectado no banco de dados!!!";

} catch (PDOException $e) {
    echo "Falha ao conectar ao banco de dados. <br/>";
    die($e->getMessage());
    
}


?>