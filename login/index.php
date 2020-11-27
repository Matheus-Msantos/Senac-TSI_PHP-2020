<?php

session_start();

require_once 'db.php';

 
if ( isset($_SESSION['login']) ) { //Caso o usuário já esteja logado no sistema

	include 'header_tpl.php';
	include 'index_menu_tpl.php';
	include 'footer_tpl.php';

} elseif ( isset( $_POST['entrar'] ) ) { //Caso o usuário tenha acabado de preencher o form de login

	$login = $_POST['login'];
	$senha = $_POST['senha'];

	$r = $db->query("SELECT senha FROM usuario WHERE email = '$login'");
	$reg = $r->fetch(PDO::FETCH_ASSOC);
	$hash = $reg['senha'];

	if ( password_verify($senha, $hash) ) {

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