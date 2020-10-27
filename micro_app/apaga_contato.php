<?php

require_once 'db.php';

$id = preg_replace('/\D/', '', $_GET['id']);

if( $objBanco->exec("DELETE FROM contatos WHERE id = $id") !== false){
    $msg = 'Registro apagado com sucesso';
}else {
    $msg = 'Registro não apagado';
}

include 'apaga_contato_tpl.php';