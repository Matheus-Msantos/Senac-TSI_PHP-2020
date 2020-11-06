<?php

$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=consulta';
$user = 'sa';
$password = '';


$db = new PDO ( $dsn, $user, $password );

$sql = 'SECLECT nome, telefone FROM cliente';

foreach ( $db->query($sql) as $registro ) {
    echo "nome: {$registro['nome']}";
}
