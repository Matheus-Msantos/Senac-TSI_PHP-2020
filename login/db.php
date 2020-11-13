<?php
//Tutorial para instalação dos drivers: 
//https://hcode.com.br/blog/instalando-sql-server-e-conectando-com-php

//DSN para SQL Server
$dsn = 'sqlsrv:Server=localhost\\SQLEXPRESS;Database=php';
$user = 'cms';
$password = 'cms';

//Como se conectar com o banco
$db = new PDO($dsn, $user, $password);