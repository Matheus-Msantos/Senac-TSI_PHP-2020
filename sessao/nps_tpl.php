<?php

session_start();

$_SESSION['nome'] = 'Matheus';
?>
<html>
	<head></head>
	<body>
		<h3>Que nota essa aplicação merece?</h3>
		<br><br>
		<form method="post" action="nps.php">
            Sua nota:<br>
            <input type="text" name='nota'>
			<br>
			<br>
			Explique o motivo de sua nota, por favor.<br>
			<textarea name='explicacao' cols="90" rows="5"></textarea>
			<br>
			<br>
			<input type="submit" name="avaliacao" value="Avaliar">
		</form>
	</body>
</html>