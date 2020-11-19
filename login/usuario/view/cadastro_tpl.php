<html>
	<head>
		<title>Meu site</title>
	</head>
	<body>
		<center>
			<br><br><h1>CRIE SUA CONTA :-)</h1><br><br>
			<table border="1">
				<tr>
					<td>
						<form method="post" action="cadastro.php">
							<br>
							<font color="red">
							<?php
							if ( count($erros) > 0 ) {

								foreach ($erros as $erro) {
									echo $erro . '<br>';
								}
							}
							?>
							</font>
							<br>
							<br>
							<label for="nome">Nome</label>
							<input type="text" id="nome" name="nome" required>
							<br><br>
							<label for="email">E-mail</label>
							<input type="text" id="email" name="email" required>
							<br><br>
							<label for="senha">Senha</label>
							<input type="password" id="senha" name="senha" required>
							<br>
							<br>
							<label for="conf_senha">Confirme a senha</label>
							<input type="password" id="conf_senha" name="conf_senha" required>
							<br><br>
							<input type="submit" name="cadastrar" value="Cadastrar">
						</form>	
					</td>
				</tr>
			</table>
		</center>
	</body>
</html>