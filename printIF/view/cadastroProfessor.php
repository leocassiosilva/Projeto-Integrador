<!DOCTYPE html>
<html>

<head>
    <title>Cadastro Professor</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="...css/style.css">
</head>

<body>
    <div id="cadastro" class="container justify-content-center">
        <div class="justify-content-center">
            <div class="col-md-12 col-md-offset-12">

                <div class="panel-heading">
                    <h3 class="panel-title"></i> Cadastro Professor</h3>
                </div>
                <div class="panel-body">
                    <form id="cadastroForm" class="form" action="Cadastrar.php" method="post">
                        <div class="form-group col-md-6">
                            <label class="text-info">Nome</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                        </div>

                        <div class="form-group col-md-6">
                            <label class="text-info">Email</label>
                            <input type="email" class="form-control" id="inputemail" name="email" placeholder="Email">
                            <p id="menssagem"></p>
                        </div>

                        <div class="form-group col-md-6">
                            <label class="text-info">Matricula</label>
                            <input type="text" class="form-control" id="inputMatricula" name="matricula" placeholder="1234">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="password" class="text-info">Senha:</label><br>
                            <input type="password" name="senha" id="senha" class="form-control">
                        </div>

                        <div class="form-group col-md-6">
                            <button type="submit" class="btn btn-success" id="btnCadastro" >Cadastrar</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script type="text/javascript"
		src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
	<script type="text/javascript" src="../js/cadadastroProfessor.js"></script>
</body>

</html>