<!DOCTYPE html>
<html lang="pt-BR">
    <?php
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Cadastro de Nota</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php require_once "../topo.php"; ?>

        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastrar Nota</h3>
                        </div>

                        <form method="post" action="" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="selectDisciplina" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disciplina:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectDisciplina" id="selectDisciplina" class="form-control" required>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectCurso" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Curso:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectCurso" id="selectCurso" class="form-control" required>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectTurma" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Turma:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectTurma" id="selectTurma" class="form-control" required>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectAluno" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Aluno:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectAluno" id="selectAluno" class="form-control" required>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNota" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nota:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputNota" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="checkFrequencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Frequência:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <label class="btn btn-primary">
                                                <input type="checkbox" name="optionFreq" id="Aula1" value="aula-1"> Aula 1
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="checkbox" name="optionFreq" id="Aula2" value="aula-2"> Aula 2
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="checkbox" name="optionFreq" id="Aula3" value="aula-3"> Aula 3
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="checkbox" name="optionFreq" id="Aula4" value="aula-4"> Aula 4
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="checkbox" name="optionFreq" id="Aula5" value="aula-5"> Aula 5
                                            </label>
                                        </div>
                                    </div>

                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success">Cadastrar</button>
                                        <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
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