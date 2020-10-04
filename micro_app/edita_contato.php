<?php

require_once 'db.php';



if( isset($_POST['id']) ) {
    $id = preg_replace('/\D/', '', $_POST['id']);
    $nome = $_POST['nm'];
    $whatsapp = $_POST['whats'];

    $objStmt = $objBanco->prepare('UPDATE contatos SET nome = :nm, whatsapp = :whats WHERE id = :id');

    $objStmt->bindParam(':id', $id);
    $objStmt->bindParam(':nm', $nome);
    $objStmt->bindParam(':whats', $whatsapp);

    if($objStmt->execute()) {
        $msg = 'contato editado com sucesso!';
    }else{
        $msg = 'ERRO :-(';
    }
}

$_GET['id'] = $_GET['id'] ?? $_POST['id'] ?? null; 

$id = preg_replace('/\D/', '', $_GET['id']);

$contato = array();

$lista_sql = "SELECT id, nome, whatsapp FROM contatos WHERE id = $id";

foreach( $objBanco->query($lista_sql) as $registro){
    $contato = $registro;
}

include 'edita_contato_tpl.php';