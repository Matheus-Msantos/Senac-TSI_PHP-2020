<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$credenciais = [	0 => ['user' => 'matheus@senac.br', 'pass' => '123456'],
					1 => ['user' => 'marcos@senac.br', 'pass' => '654321'],
					2 => ['user' => 'karina@senac.br', 'pass' => '222222']];

if ( isset($_SESSION['login']) ) { //Caso o usuário já esteja logado no sistema

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

} elseif ( isset( $_POST['entrar'] ) ) { //Caso o usuário tenha acabado de preencher o form de login

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	if ( in_array( ['user' => $login, 'pass' => $senha], $credenciais) ) {

		$_SESSION['login'] = $login;

		include 'header_tpl.php';
		include 'index_menu_tpl.php';
		include 'footer_tpl.php';

	} else {

		$msg = 'Credenciais inválidas, tente novamente';

		include 'index_tpl.php';		
	}

} else { //Caso o usuário tenha acabado de chegar no sistema

	include 'index_tpl.php';
}