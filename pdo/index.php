<?php

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=consulta';
$user = 'sa';
$password = '100595xoxo!';


$db = new PDO ( $dsn, $user, $password );

$sql = 'SECLECT nome, telefone FROM cliente';

foreach ( $db->query($sql) as $registro ) {
    echo "nome: {$registro['nome']}";
}