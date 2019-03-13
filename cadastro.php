<?php
/*
Plugin name: cadastro
Plugin uri: https://shebytes.me
Description: plugin de teste para cadastro de usuários
Version: 1.0
Author: Sandra Abreu
Author uri: shebytes.me
License:GPVv2
*/

session_start()

?>

<!DOCTYPE html>
<html lang pt="pt-br">
	<head>
		<meta charset="utf-8">
		<title> criar ler alterar e deletar-cadastrar</title>
	</head>
	<body>
		<h1>Cadastrar UsuÃ¡rio</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>

		<form method="POST" action="processa.php">
			<label>Nome</label>
			<input type="text" name="nome" placeholder="Digite o nome completo"><br><br>
			
			<label> E-mail:</label>
			<input type="email" name="email" placeholder="Digite seu e-mail"></input><br><br>
			
			<input type="submit" value="cadastrar">
		</form>

		</body>

</html>