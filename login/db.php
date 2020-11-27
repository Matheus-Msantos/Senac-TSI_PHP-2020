<?php

/* Conectando no SQLServer usando driver invocation */

$dsn = 'mysql:dbname=login;host=localhost';
$user = 'root';
$password = '';

try {
    $db = new PDO($dsn, $user, $password); 
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


$sql = 'SELECT id, email, senha FROM usuario';