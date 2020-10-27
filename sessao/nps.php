<?php

session_start();

$nota = $_POST['nota'];
$explicacao = $_POST['explicacao'];

echo "<br><br>Você deu a nota $nota pelo motivo \"$explicacao\"";

$db = new PDO('mysql:dbname=php;host=localhost', 'root', '' );
$stmt = $db->prepare('INSERT INTO nps ( nota, explicacao) VALUES ( :nota, :explicacao)');

$stmt->bindParam(':nota', $nota);					
$stmt->bindParam(':explicacao', $explicacao);	

if ( $stmt->execute() ) {

	echo '<br><br>Pesquisa gravada com sucesso!!';

} else {
	echo '<br> Erro! ';
}

echo '<br><br><a href="./agradecimento.php?nota=' . $nota . '">Seguir</a>';