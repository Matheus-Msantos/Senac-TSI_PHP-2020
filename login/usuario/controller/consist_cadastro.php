<?php

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$conf_senha = $_POST['conf_senha'] ?? null;

$senha = trim($senha);
$email = strtolower( $email );//trata o e-mail - fica tudo minúsculo

$erros = [];

//Verifica se nome tem dois ou mais caracteres 
if ( strlen($nome) < 2 ) {

	$erros[] = 'O nome tem que ter ao menos dois caracteres';
}

//Verifica se o e-mail é válido
if ( !filter_var( $email, FILTER_VALIDATE_EMAIL) ) {

	$erros[] = 'E-mail inválido';

} elseif ( ja_existe_email($email) ) {

	$erros[] = 'E-mail já cadastrado';
}

//Verifica se a senha tem no mínimo 8 caracteres
if ( strlen($senha) < 8 ) {

	$erros[] = 'A senha tem que ter ao menos oito caracteres';

//Verifica se a confirmação da senha bate
} elseif ( $senha != $conf_senha ) {

	$erros[] = 'A confirmação da senha não é válida';
}
