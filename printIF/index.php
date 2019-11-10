<?php
session_start();
?>

<?php include 'view/layout/templateIndex.php'; ?>

<body>

	<div class="text-center">
		<img src="img/logo.png">
	</div>
	<div id="login" class="container login-container">
		<div class="justify-content-center">
			<div class="col-md-12 col-md-offset-12">

				<div class="panel-heading">
					<h3 class="panel-title"></i> Login</h3>
				</div>

				<?php
				if (isset($_SESSION['nao_autenticado'])) :
					?>
					<div class="notification is-danger">
						<p>ERRO: Usuário ou senha inválidos.</p>
					</div>
				<?php
				endif;
				unset($_SESSION['nao_autenticado']);
				?>
				<div class="panel-body">
					<form id="login-form" class="form" action="login.php" method="post">
						<div class="form-group">
							<label class="text-info">E-mail:</label><br>
							<input name="email" type="email" class="form-control" placeholder="Seu email" autofocus="">

						</div>
						<div class="form-group">
							<label for="password" class="text-info">Senha:</label><br>
							<input name="senha" class="form-control" type="password" placeholder="Sua senha">

						</div>
						<div class="form-group">
							<button class="form-control btn btn-success "><span class="glyphicon glyphicon-remove"></span>Login </button><br />
						</div>
						<div class="row">
							<div class="col-5">
								<p><a href="view/cadastroProfessor.php">Cadastra-se</a></p>
							</div>
							<div class="col-7">
								<p>Esqueceu <a href="view/esqueceuSenha.php">a senha ?</a></p>
							</div>

						</div>

					</form>
				</div>

			</div>
		</div>
	</div>
	<footer class="page-footer blue text-center text-md-center mt-0" style=" height: 100px;">

		<!--Copyright-->
		<div class="footer-copyright" style="margin-top: 100px;">
			<div class="container-fluid">
				© 2019 Copyright: <a href=""> IFRN </a>
			</div>
		</div>
		<!--/.Copyright-->

	</footer>


</body>

</html>