<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Area de Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
</head>

<?php 
	$mail = isset($_POST["mail"])?$_POST["mail"]:null;
	$userre = isset($_POST["user-re"])?$_POST["user-re"]:null;
	$passre = isset($_POST["pass-re"])?$_POST["pass-re"]:null;
	$passrerep = isset($_POST["pass-re-rep"])?$_POST["pass-re-rep"]:null;

	if (isset($mail)) {
		if (isset($userre)) {
			if (isset($passre)) {
				if (isset($passrerep) && $passre == $passrerep) {
					$msgre = "<p class='green element-animation'>Conta criada com sucesso!</p>";
				}else{ $msgre = "<p class='red element-animation'>As senhas não coincidem!</p>"; }
			}else{ $msgre = "<p class='red element-animation'>Escreva uma senha!</p>"; }
		}else{ $msgre = "<p class='red element-animation'>Usuario ja cadastrado!</p>"; }
	}
?>

<body>
	<section>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<div id="card">
			<div id="card-log">
				<div id="card1" style="display:none">
					<h1>Area de Login</h1>
					<br>
					<?php echo isset($msg)?$msg:""; ?>
					<form method="post" action="index.php">
						<h3>Nome:</h3>
						<input type="text" name="user" required>
						<h3>Senha:</h3>
						<input type="password" name="pass" required><br>
						<a href="recover.php">Esqueceu a senha?</a><br><br>
						<button type="submit">Entrar</button>
					</form>	
				</div>

				<div id="card-reg">
					<h1>Area de Registro</h1>
					<br>
					<?php echo isset($msgre)?$msgre:""; ?>
					<form method="post" action="">
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
					<button type="button" class="btn-toggle" data-element="#card-reg" data-id="#card1">Ja tenho uma conta</button>
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
		    if($(this).text() == "Ja tenho uma conta"){
			$(this).text("Não tenho uma conta");
			} else{
	    		$(this).text("Ja tenho uma conta");
			}
		  });
		});
	</script>
</body>
</html>