<!DOCTYPE html>
<html lang="pt-BR">
    <?php
    $variavel = 'secretaria';
    session_start(); 
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Cadastro de Curso</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php require_once"../topo.php";?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Curso</h3>
                        </div>

                        <form method="post" action="bankscurso.php?acao=adicionar" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="inputNome" class="col-xs-3 col-sm-2 col-md-2 control-label">Nome:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <input type="text" class="form-control" name="nome" id="inputNome" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputOrientador" class="col-xs-3 col-sm-2 col-md-2 control-label">Orientador:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <input type="text" name="orientador" class="form-control"  id="inputOrientador" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectTipo" class="col-xs-3 col-sm-2 col-md-2 control-label">Tipo:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <select name="selectTipo" id="selectTipo" class="form-control" required>
                                                <option value="">Selecione</option>
                                                <option value="Presencial">Presencial</option>
                                                <option value="Semi-Presencial">Semi-Presencial</option>
                                                <option value="À Distância">À Distância</option>
                                            </select>
                                        </div>
                                    </div>

<!--                                    <div class="form-group">
                                        <label for="numberCarga" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Carga Horária:</label>
                                        <div class="col-xs-6 col-sm-5 col-md-7 col-lg-5">
                                            <input type="number" name="ch" class="form-control" id="inputCarga" required>
                                        </div>
                                    </div>-->

                                    <div class="col-md-offset-4">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                        <a href="javascript:window.history.go(-1)"><button type="submit" class="btn btn-warning">Cancelar</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../inc/rodape.php'; ?>
    </body>
</html>