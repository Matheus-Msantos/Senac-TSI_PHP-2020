<?php 

require_once 'db.php';

include 'busca_contato_form_tpl.php';

if (isset ($_POST['argumento'])){
    $objStmt = $objBanco->prepare('SELECT id, nome, whatsapp FROM contatos WHERE nome LIKE :arg');

    $argumento = '%' . $_POST['argumento'] . '%';

    $objStmt->bindParam(':arg', $argumento);
    
    $objStmt->execute();

    while($reg = $objStmt->fetch(PDO::FETCH_ASSOC)){
        $tabela[$reg['id']] = $reg;
    }

    $tabela = $tabela ?? array();

    include 'busca_contato_resultado_tpl.php';
}