<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>

	<div class="container login-container">
		<div class="justify-content-center">
			<div class="cadastro-form-1">
				<form id="recuperarSenha" class="form" action="" method="post">
					<h3 class="text-center text-info">Recuperar Senha</h3></br>

					<div class="form-group">
						<label class="text-info">E-mail:</label><br>
						<input type="text" name="usuario" id="usuario" class="form-control">
					</div>
					
					<div class="form-group">
						<button class="form-control btn btn-success "><span
								class="glyphicon glyphicon-remove"></span>Recuperar</button><br />
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript"
		src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/esqueceuSenha.js"></script>
</body>

</html>