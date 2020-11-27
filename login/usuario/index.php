<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require '../sessao.php';

require 'model/dados.php';

chdir( __DIR__ );

if ( isset($_GET['apagar']) ) {

	if ( !apagar_usuario( $_GET['apagar'] ) ) {

		$erro = 'Erro ao tentar apagar o usuário!';
	}
}

$lista = listar();

require 'view/lista.php';