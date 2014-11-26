<!DOCTYPE html>
<?php
session_start();
$variavel = "coordenador";
require_once '../classes/validaAcesso.php';

$idTruma = $_GET['idTurma'];
?>
<html lang="pt-BR">
<<<<<<< HEAD
<head>
	<?php require_once "../inc/head.php"; ?>

	<title>Editar Turma</title>

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
						<h3><span class="glyphicon glyphicon-th-list"></span> Editar Turma</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-12">
								<div class="form-group">
									<label for="inputName" class="col-xs-3 col-sm-2 col-md-2 control-label">Nome:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<input type="text" class="form-control" id="inputName" required>
									</div>
								</div>

								<div class="form-group">
									<label for="selectDependencia" class="col-xs-3 col-sm-2 col-md-2 control-label">Dependência:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<select name="selectDependencia" id="selectDependencia" class="form-control" required>
											<option value=""></option>
											<option value="rdr">RDR</option>
											<option value="str">STR</option>
											<option value="gtr">GTR</option>
											<option value="trt">TRT</option>
											<option value="ster">STER</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="dateBegin" class="col-xs-3 col-sm-2 col-md-2 control-label">Data Inicial:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<div class="input-group date">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
											<input type="date" class="form-control">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="dateEnd" class="col-xs-3 col-sm-2 col-md-2 control-label">Data Final:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<div class="input-group date">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
											<input type="date" class="form-control">
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="Hora" class="col-xs-3 col-sm-2 col-md-2 control-label">Hora:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<div class="input-group time">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-time"></span>
											</span>
											<input type="text" class="form-control" />
										</div>
									</div>
								</div>

								<div class="form-group">
									<label for="selectActive" class="col-xs-3 col-sm-2 col-md-2 control-label">Ativo:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<select name="active" id="active" class="form-control">
											<option></option>
											<option>Sim</option>
											<option>Não</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputProf" class="col-xs-3 col-sm-2 col-md-2 control-label">Professor:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<select name="selectProf" id="selectProf" class="form-control" required>
											<option></option>
											<option>Guilherme Costa</option>
											<option>Fernando Gonçalves</option>
											<option>Wesley Tschiedel</option>
											<option>Welton Dias</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="selectDisciplina" class="col-xs-3 col-sm-2 col-md-2 control-label">Disiciplina:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<select name="selectHabilitado" id="selectHabilitado" class="form-control">
											<option value=""></option>
											<option value="prog-estruturada">Programação Estruturada</option>
											<option value="poo">Programaçaõ Orientada a Objetos</option>
											<option value="redes">Redes de Computadores</option>
											<option value="c#">Programação Comercial</option>
											<option value="so">Sistemas Operacionais</option>
										</select>
									</div>
								</div>

								<div class="col-md-offset-4">
									<button type="button" class="btn btn-success" data-toggle="modal" data-target="#editar-success">Alterar</button>
										<div class="modal fade" id="editar-success" tabindex="-1" role="dialog" aria-labelledby="editar-success" aria-hidden="true">
											<div class="modal-dialog modal">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
													</div>
													<div class="modal-body">
														<p>Alteração realizada com sucesso!</p>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
													</div>
												</div>
											</div>
										</div>
									<a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include '../inc/rodape.php'; ?>
</body>
=======
    <head>
        <?php require_once "../inc/head.php"; ?>

        <title>Editar Turma</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php
        $rs = mysql_query("select turma.* FROM turma where turma_cod = '$idTruma'");
        $obj = mysql_fetch_object($rs);
        //var_dump($obj);
        //  die();
        ?>
        <?php require_once "../topo.php"; ?>

        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Editar Turma</h3>
                        </div>
                        <form method="post" action="banksturma.php?acao=alterar&idTurma=<?php echo $obj->turma_cod ?>" class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="inputName" class="col-xs-3 col-sm-2 col-md-1 control-label">Nome:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-3">
                                            <input type="text" class="form-control" id="inputName" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="selectTurno" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Turno:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <select name="turno" id="selectDependencia" class="form-control" required>
                                                <option>Turno</option>
                                                <option value="Matutino" <?php echo ($obj->turno == 'Matutino') ? "selected='selected'" : ''; ?>>Matutino</option>
                                                <option value="Vespertino" <?php echo ($obj->turno == 'Vespertino') ? "selected='selected'" : ''; ?>>Vespertino</option>
                                                <option value="Noturno" <?php echo ($obj->turno == 'Noturno') ? "selected='selected'" : ''; ?>>Noturno</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputProtocolo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Protocolo:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" name="protocolo" class="form-control"  id="inputName" placeholder="Protocolo" maxlength="50" required value="<?php echo $obj->protocolo; ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectAno" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Ano:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <select name="ano" id="selectDependencia" class="form-control" required>
                                                <option>Ano</option>
                                                <option value="2015" <?php echo ($obj->ano == "2015") ? "selected='selected'" : ''; ?>>2015</option>
                                                <option value="2014" <?php echo ($obj->ano == "2014") ? "selected='selected'" : ''; ?>>2014</option>
                                                <option value="2013" <?php echo ($obj->ano == "2013") ? "selected='selected'" : ''; ?>>2013</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Semestre:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="periodo" id="selectHabilitado" class="form-control">
                                                <option>Semestre/Período</option>
                                                <option value="1" <?php echo ($obj->periodo == '1') ? "selected='selected'" : ''; ?>>1º</option>
                                                <option value="2" <?php echo ($obj->periodo == '2') ? "selected='selected'" : ''; ?>>2º</option>
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
                                                while ($objCurso = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $objCurso->cod . "' > " . $objCurso->nome . " - " . $objCurso->modalidade . " </option>");
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
                                                while ($objProf = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $objProf->cod . "' > " . $objProf->nome . " - " . $objProf->cpf . " - " . $obj->telefone . " </option>");
                                                }
                                                ?>

                                            </select>
                                        </div>

                                        <div class="pull-right col-sm-8 col-md-10">
                                            <button type="commit" class="btn btn-success" data-toggle="modal" data-target="#editar-success">Alterar</button>

                                            <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </body>
>>>>>>> 41c89ff57a1e255f6d5c8307caaf5d59d970ab8d
</html>