<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Formulário</title>
</head>

<body>
    <a href="lista_contato.php">Listar</a>
    <a href="lista_contato.php">apagar</a>
    <a href="lista_contato.php">Editar</a>
    <br>
        <?php
            if (isset($msg)) echo $msg;        
        ?>
    <br>
    <h1>Edite seu contato</h1>
    <form method="post" action="edita_contato.php">
        Nome: <input type="text" name="nm" value="<?php echo $contato['nome']?>"><br>
        Whatsapp: <input type="texy" name="whats" value="<?php echo $contato['whatsapp']?>">
        <input type="hidden" name="id" value="<?php echo $contato['id']?>">
        <input type="submit" value="Editar">
    </form>
</body>

</html> 