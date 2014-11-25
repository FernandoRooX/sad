<!doctype html>
<html lang="pt-BR">
    <?php
    $variavel = 'coordenador';
    session_start();
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Cadastro de Turma</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php require_once '../topo.php'; ?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Turma</h3>
                        </div>

                        <form method="post" action="banksturma.php?acao=adicionar" class="form-horizontal" role="form" >
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">    
                                        <label for="selectTurno" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Turno:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <select name="turno" id="selectDependencia" class="form-control" required>
                                                <option>Turno</option>
                                                <option value="Matutino">Matutino</option>
                                                <option value="Vespertino">Vespertino</option>
                                                <option value="Noturno">Noturno</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputProtocolo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Protocolo:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" name="protocolo" class="form-control"  id="inputName" placeholder="Protocolo" maxlength="50" required>
                                        </div>
                                    </div>
                                    <!--
                                                                        <div class="form-group">
                                                                            <label for="Date" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data:</label>
                                                                            <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                                <div class="input-group date">
                                                                                    <input type="date" class="form-control">
                                                                                    <span class="input-group-addon">
                                                                                        <i class="glyphicon glyphicon-calendar"></i>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                    
                                                                        <div class="form-group">
                                                                            <label for="Hora" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Hora:</label>
                                                                            <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                                <div class="input-group time">
                                                                                    <input type="time" class="form-control" />
                                                                                    <span class="input-group-addon">
                                                                                        <span class="glyphicon glyphicon-time"></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                    
                                                                        <hr />-->



                                    <div class="form-group">
                                        <label for="selectAno" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Ano:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <select name="ano" id="selectDependencia" class="form-control" required>
                                                <option>Ano</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Semestre:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="periodo" id="selectHabilitado" class="form-control">
                                                <option>Semestre/Período</option>
                                                <option value="1">1º</option>
                                                <option value="2">2º</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="optionCurso" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Curso:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="curso" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione o Curso</option>
                                                <?php
                                                $rs = mysql_query("SELECT cod, nome, modalidade FROM curso ORDER BY nome");
                                                while ($obj = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $obj->cod . "' > " . $obj->nome . " - " . $obj->modalidade . " </option>");
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="optionProfessor" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Professor:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="codProfessor" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione o Professor</option>
                                                <?php
                                                $rs = mysql_query("select professor.*, pessoa.* FROM professor inner join pessoa on professor.PESSOA_idPESSOA = pessoa.idPESSOA ORDER BY nome");
                                                while ($obj = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $obj->cod . "' > " . $obj->nome . " - " . $obj->cpf . " - " . $obj->telefone . " </option>");
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="optionDisciplina" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disciplina:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="optionDisciplina" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione a Disciplina</option>
                                                <?php
                                                $rs = mysql_query("SELECT cod, nome, carga_horaria FROM disciplina ORDER BY nome");
                                                while ($obj = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $obj->cod . "' > " . $obj->nome . " - " . $obj->carga_horaria . " </option>");
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <!--<div class="form-group">
                                        <label for="optionALuno" class="col-xs-6 col-sm-2 col-md-11 col-lg-2 control-label">Aluno:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="optionAluno" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione o Aluno</option>
                                                 
                                            </select>
                                        </div>
                                    </div>
                                    -->
                                    <div class="form-group">
                                        <label for="optionTurma" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Turma/Curso:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="optionTurma" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione a Turma</option>
                                                <?php
                                                $rs = mysql_query("select TURMA_cod, protocolo, periodo, turno, ano from turma order by turma_cod;");
                                                while ($obj = mysql_fetch_object($rs)) {
                                                    echo ("<option value='" . $obj->Turma_cod . "' > " . $obj->protocolo . " . $obj->periodo " . $obj->turno . ". $obj->ano. </option>");
                                                }
                                                ?>
                                                }
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_inicio" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data de Início:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="date" name="dt_inicio" class="form-control" id="inputNac" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="alunos" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Alunos:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-8">
                                            <select name="optionAlunos" class="form-control" required >
                                                <option value="">Selecione o Aluno</option>
                                                 <?php
                                                    $rs = mysql_query("select aluno.*, pessoa.* FROM aluno inner join pessoa on aluno.PESSOA_idPESSOA = pessoa.idPESSOA ORDER BY nome");
                                                    while ($obj = mysql_fetch_object($rs)) {
                                                ?>
                                                <?php  echo ("<option value='" . $obj->PESSOA_idPESSOA . "' > " . $obj->nome . " - " . $obj->matricula . " - " . $obj->cpf . "</a>"); ?></td>
                                                </tr>
                                                <?php } ?>
                     
                                                </select>
                                            </div>
                                            <p class="control-label"><a href="#"><u>+ Adicionar Aluno</u></a></p>
                                        </div>

                                        <div class="table-responsive col-lg-offset-2 col-xs-6 col-sm-10 col-md-11 col-lg-8">
                                            <table class="table table-striped">
                                                <thead class="h5">
                                                    <tr>
                                                        <th>Alunos</th>
                                                        <th>Ação</th>
                                                    </tr>
                                                </thead>

                                                <tbody class="h5">
                                                    <tr>
                                                        <td></td>
                                                        <td><button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Remover</button></td>
                                                <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Tem certeza que deseja remover esse aluno da dependência?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                                <button type="button" class="btn btn-danger">Sim</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </tr>
                                                </tbody>
                                            </table>
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