<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Area de Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- Browser Color -->
    <meta name="theme-color" content="#5a2cc9" />
    <meta name="msapplication-navbutton-color" content="#5a2cc9">
    <meta name="apple-mobile-web-app-status-bar-style" content="#5a2cc9">
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
					<h1>Area de Login</h1>
					<br>
					<?php echo isset($msg)?$msg:""; ?>
					<form method="post">
						<h3>Nome:</h3>
						<input type="text" name="user" required>
						<h3>Senha:</h3>
						<input type="password" name="pass" required><br>
						<a href="recover.php">Esqueceu a senha?</a><br><br>
						<button type="submit">Entrar</button>
					</form>	
				</div>

				<div id="card-reg" style="display:none">
					<h1>Area de Registro</h1>
					<br>
					<?php echo isset($msgre)?$msgre:""; ?>
					<form method="post" action="register.php">
						<h3>Email:</h3>
						<input type="email" name="mail" required><br>
						<h3>Usuario:</h3>
						<input type="text" name="user-re" required>
						<h3>Senha:</h3>
						<input type="password" name="pass-re" required><br>
						<h3>Repita a senha:</h3>
						<input type="password" name="pass-re-rep" required><br>
						<button type="submit">Me Cadastrar</button>
						</div>
					</form>
					<button type="button" class="btn-toggle" data-element="#card-reg" data-id="#card1">Não tenho uma conta</button>
				</div>
			</div>
		</div>
		<br>
		*Alisson Custodio | Todos os direitos reservados.
	</section>
	<script type="text/javascript">
		$(function() {
		  $(".btn-toggle").click(function(e) {
		    e.preventDefault();
		    el = $(this).data('element');
		    el1 = $(this).data('id');
		    $(el).slideToggle();
		    $(el1).slideToggle();
		    if($(this).text() == "Não tenho uma conta"){
			$(this).text("Ja tenho uma conta");
			} else{
	    		$(this).text("Não tenho uma conta");
			}
		  });
		});
	</script>
</body>
</html>