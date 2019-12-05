<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Area de Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>

<?php 
	$newpass = isset($_POST["newpass"])?$_POST["newpass"]:null;
	$newpassr = isset($_POST["newpassr"])?$_POST["newpassr"]:null;

	if (isset($newpass)) {
		if (isset($newpassr) && $newpass == $newpassr) {
			$msgre = "<p class='green element-animation'>Sua senha foi alterada!</p>";
			$init = "<br><br><a href='index.php' class='btn'>Voltar ao inicio</a>";
		}else{ $msgre = "<p class='red element-animation'>Senhas não coincidem!</p>"; }
	}
?>

<body>
	<section>
		<div id="card">
			<div id="card-log">
				<div id="card-reg">
					<h1>Trocar minha senha</h1>
					<br>
					<?php echo isset($msgre)?$msgre:""; ?>
					<form method="post" action="">
						<h3>Nova senha:</h3>
						<input type="password" name="newpass" required><br>
						<h3>Repita a senha:</h3>
						<input type="password" name="newpassr" required>
						<button type="submit">Trocar minha senha</button>
						<?php echo isset($init)?$init:""; ?>
						</div>
					</form>
				</div>
			</div>
		</div>
		<br>
		*Alisson Custodio | Todos os direitos reservados.
	</section>
</body>
</html>