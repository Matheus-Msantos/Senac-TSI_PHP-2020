<?php

session_start();

echo 'Você é o: ' . $_SESSION['nome'] . '<br><br>';

$nota = $_GET['nota']; // Existe o $_REQUEST que disponibiliza os valores de $_GET ou $_POST
$protocolo = $_GET['protocolo'];

if ( $nota >= 9 ) {

	echo "ESTAMOS MUITO FELIZES!!";

} else {

	echo "O que podemos fazer para você nos dar uma nota 10???";
}

echo "<br><br>Se protocolo é o $protocolo";