<!doctype html>
<html lang="pt-BR">
    <?php
    $variavel = 'coordenador';
    session_start(); ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Cadastro de Aluno</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body><?php require_once'../topo.php';?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Disciplina</h3>
                        </div>

                        <form method="post" action="banksdisciplina.php?acao=adicionar" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    

                                    <div class="form-group">
                                        <label for="inputDisciplina" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disciplina:</label>
                                        <div class="col-xs-6  col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" name="disciplina" class="form-control" id="inputDisciplina" maxlength="30" required="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="inputSituacao" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Situação:</label>
                                        <div class="col-xs-6  col-sm-10 col-md-11 col-lg-10">
                                             <select name="situacao" id="idPessoa" class="form-control" required>
                                                <option value="Ativa">Ativa</option>
                                                <option value="Inativa">Inativa</option>
                                             </select>
                                           
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="numberCarga" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Carga Horária:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="number" name="ch" maxlength="3" class="form-control" id="inputCarga" required="">
                                        </div>
                                    </div>
                                    
                                    <!--
                                    <div class="form-group">
                                        <label for="inputPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Período Letivo:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputPeriodo" required>
                                        </div>
                                    </div> -->

<!--                                    <div class="form-group">
                                        <label for="selectSerie" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Série:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectSerie" id="selectSerie" class="form-control" required>
                                                <option value="">Selecione</option>
                                                <option value="1">1º</option>
                                                <option value="2">2º</option>
                                                <option value="3">3º</option>
                                                <option value="4">4º</option>
                                                <option value="5">5º</option>
                                                <option value="6">6º</option>
                                                <option value="7">7º</option>
                                                <option value="8">8º</option>
                                                <option value="9">9º</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectDependencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Dependência:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectDependencia" id="selectDependencia" class="form-control" required="">
                                                <option value="">Selecione</option>
                                                <option value="rdr">RDR</option>
                                                <option value="str">STR</option>
                                                <option value="gtr">GTR</option>
                                                <option value="trt">TRT</option>
                                                <option value="ster">STER</option>
                                            </select>
                                        </div>
                                    </div>-->


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