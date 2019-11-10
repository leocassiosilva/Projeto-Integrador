<!DOCTYPE html>
<html>

<head>
    <title>Cadastro de Estagiario</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="...css/style.css">
</head>

<body>
    <div class="container cadastro-container justify-content-center">
        <div class="justify-content-center">
            <div class="cadastro-form-1">
                <form id="cadastroForm" action="verificarEmail.php" method="POST">
                    <h3>Cadastro de Estagiarios</h3>
                    <div class="form-group col-md-6">
                        <label class="text-info">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome">
                    </div>

                    <div class="form-group col-md-6">
                        <label class="text-info">Email</label>
                        <input type="email" class="form-control" id="inputemail" name="inputemail" placeholder="Email">
                    </div>
                    
                    <div class="form-group col-md-6">
                        <label class="text-info">Matricula</label>
                        <input type="text" class="form-control" id="matricula" name="matricula" placeholder="1234">
                    </div>

                    <div class="form-group col-md-6">
                        <label class="text-info">Turno que vai estagiar</label>
                        <select class="form-control" id="turno" name="turno">
                            <option value="">------------</option>
                            <option value="1">Matutino</option>
                            <option value="2">Vespertino</option>
                            <option value="3">Noturno</option>
                        </select>
                    </div>
                    <button type="submit" id="btnCadastro" class="btn btn-success">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../js/cadastroEstagiario.js"></script>
</body>

</html>