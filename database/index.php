<?php
/* Como acessar o banco de dados.
mysqli_connect('host', 'user', 'password', 'nome do DataBase');
*/

$dB = mysqli_connect('localhost', 'root', '', 'php');

/* Exemplo para cirar uma tabela.
mysqli_query(
    $var, 
    'CREATE TABLE nomeDaTabela (atributo BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, atributo VARCHAR(255) NOT NULL, atributo BIGINT)');
*/

$query = mysqli_query(
    $dB, 
    'CREATE TABLE IF NOT EXISTS contatos (id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY, nome VARCHAR(255) NOT NULL, whatsapp BIGINT)'
);

if($query){
    echo'Criado com sucesso';
}else{
    echo'Erro';
}

$contato = ['nome' => 'Matheus Melo', 'whatsapp' => '551191234567'];

//Inserindo dados no DataBase
mysqli_query(
    $dB, 
    "INSERT INTO contatos (nome, whatsapp) VALUES ('{$contato['nome']}', '{$contato['whatsapp']}')"
);

//Lista o que está na tabela.
$query = mysqli_query($dB, 'SELECT id, nome, whatsapp FROM contatos');
echo'<br><br> <pre>';
var_dump($query->fetch_assoc());

/*Deleta uma linha da tabela
Mysql_query($dB, 'DELETE FROM contatos WHERE id = 1');
*/

/*Deleta a tabela
Mysql_query($dB, 'DELETE FROM contatos');
*/

//$_POST, $_GET, $_REQUEST - Vetores super globais para recebermos dados do usuário
echo"<br><br> Cadastro enviado: {$_POST['nm']} , {$_POST['whats']}";
