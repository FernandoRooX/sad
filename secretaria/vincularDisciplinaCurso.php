<!doctype html>
<html lang="pt-BR">
    <?php
    $variavel = 'secretaria';
    session_start();
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
<?php include_once '../inc/head.php';
 ?>
        <title>Cadastro de Turma</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
<?php require_once '../topo.php';?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Vincular Disciplina a Curso</h3>
                        </div>

                        <form method="post" action="banksvinculardisciplinacurso.php?acao=adicionar" class="form-horizontal" role="form" >
                            <div class="row">
                                <div class="col-md-8">
                                   
                                    <div class="form-group">
                                        <label for="optionCurso" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disciplina:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="codDisciplina" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione a Disciplina</option>
                                                <?php
                                                $rs = mysql_query("SELECT cod, nome, situacao, carga_horaria FROM disciplina where situacao = 'Ativa' ORDER BY nome");
                                                while ($obj = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $obj->cod . "' > " . $obj->nome . " - " . $obj->situacao . " - " . $obj->carga_horaria . " </option>");
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="optionCurso" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Curso:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="codCurso" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione o Curso</option>
                                                <?php
                                                $rs = mysql_query("SELECT * FROM curso ORDER BY nome");
                                                while ($obj = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $obj->cod . "' > " . $obj->nome . " - " . $obj->orientador . " - " . $obj->modalidade . " </option>");
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
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