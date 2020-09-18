<?php

require_once'config.php';

$objBanco = new PDO(DSN, DB_USER, DB_PASS);

/*DeBUG
var_dump( $objBanco->errorInfo() );
*/

$consulta = $objBanco->query('SELECT id, nome, whatsapp FROM contatos', PDO::FETCH_ASSOC);

//$deletar = $objBanco->query('DELETE FROM contatos WHRE id = 1');

foreach ($consulta as $registro) {
    echo"ID: {$registro['id']} NOME: {$registro['nome']} WHATSAPP: {$registro['whatsapp']} <br>";
}


