<?php

require_once 'db.php';

// Evitar SQL injaction

$objStmt = $objBanco->prepare('INSERT INTO contatos(nome, whatsapp) VALUES (:nome, :whats)');

$objStmt->bindParam(':nome', $_POST['nm']);
$objStmt->bindParam(':whats', $_POST['whats']);

if($objStmt->execute()) {
    $msg = 'contato gravado com sucesso!';
}else{
    $msg = 'ERRO :-(';
}


// Chama template (font-end)
include 'grava_contato_tpl.php';