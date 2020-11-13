<html>
	<head>
		<title>Meu site</title>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<table border="1">
				<tr>
					<td>
						<form method="post" action="index.php">
							<br>
							<?php
							if ( isset($msg) ) echo $msg;
							?>
							<br>
							<br>
							<label for="login">Login</label>
							<input type="text" id="login" name="login">
							<br><br>
							<label for="senha">Senha</label>
							<input type="password" id="senha" name="senha">
							<br><br>
							<input type="submit" name="entrar" value="Entrar">
						</form>	
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>