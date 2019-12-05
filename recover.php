<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Area de Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>

<?php 
	$name = isset($_POST["user"])?$_POST["user"]:null;
	$pass = isset($_POST["pass"])?$_POST["pass"]:null;

	if (isset($name) && $name == "alisson") {
		if ($pass == "123") {
			$msg = "<p class='green element-animation'>Logado com sucesso!</p>";
		}else{
			$msg = "<p class='red element-animation'>Ops.. Senha incorreta!</p>";
		}
	}elseif (isset($name)) {
		$msg = "<p class='red element-animation'>Oops.. Usuario não encontrado!</p>";
	}else{

	}
?>

<body>
	<section>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<div id="card">
			<div id="card-log">
				<div id="card1">
					<h1>Trocar minha senha</h1>
					<br>
					<?php echo isset($msg)?$msg:""; ?>
					<form method="post">
						<h3>Email:</h3>
						<input type="text" name="user" required>
						<button type="submit">Recuperar minha conta</button><br><br>
						<a href="index.php">Voltar</a>
					</form>	
				</div>
			</div>
		</div>
		<br>
		*Alisson Custodio | Todos os direitos reservados.
	</section>
</body>
</html>