<html>

<head>
	<meta charset="utf-8" />
	<title>Mail Send</title>
	<link rel="icon" type="image/x-icon" href="logo.png">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

	<?php
	
	if (isset($_GET["erro"])) {
		switch ($_GET["erro"]) {
			case 1:
				echo "<script>alert('Bota coisa no email!')</script>";
				case 2:
					echo "<script>alert('Não deu ainda!')</script>";
					
				}
			}elseif(isset($_GET["submited"])){
				echo "<script>alert('Foi!')</script>";
			}
	?>

	<div class="container">

		<div class="py-3 text-center">
			<img class="d-block mx-auto mb-2" src="logo.png" alt="" width="72" height="72">
			<h2>Send Mail</h2>
			<p class="lead">App de envio de e-mails particular! vulgo to treinando kkk vai ficar foda!</p>
		</div>

		<div class="row">
			<div class="col-md-12">

				<div class="card-body font-weight-bold">
					<form action="submit.php" method="post">
						<div class="form-group">
							<label for="para">Para</label>
							<input name="para" type="text" class="form-control" id="para" placeholder="joao@dominio.com.br">
						</div>

						<div class="form-group">
							<label for="assunto">Assunto</label>
							<input name="assunto" type="text" class="form-control" id="assunto" placeholder="Assundo do e-mail">
						</div>

						<div class="form-group">
							<label for="mensagem">Mensagem</label>
							<textarea name="msg" placeholder="Blá Blá Blá" class="form-control" id="mensagem"></textarea>
						</div>

						<button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

</html>