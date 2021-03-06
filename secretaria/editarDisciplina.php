<!DOCTYPE html>
<?php
require_once '../classes/validaAcesso.php';
?>
<html lang="pt-BR">
<head>
	<?php require_once "../inc/head.php"; ?>

	<title>Editar Disciplina</title>

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
						<h3><span class="glyphicon glyphicon-th-list"></span> Editar</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-8">
								<div class="form-group">
									<label for="inputName" class="col-xs-3 col-sm-2 col-md-2 control-label">Nome:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<input type="text" class="form-control" id="inputDisciplina" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputCH" class="col-xs-3 col-sm-2 col-md-2 control-label">Carga Horária:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<input type="number" class="form-control" id="inputCH" required>
									</div>
								</div>

								<div class="form-group">
									<label for="selectSemestre" class="col-xs-3 col-sm-2 col-md-2 control-label">Semestre:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<select name="selectSerie" id="selectSerie" class="form-control" required>
											<option value=""></option>
											<option value="1">1º</option>
											<option value="2">2º</option>
											<option value="3">3º</option>
											<option value="4">4º</option>
											<option value="5">5º</option>
											<option value="6">6º</option>
											<option value="7">7º</option>
											<option value="8">8º</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputPeriodo" class="col-xs-3 col-sm-2 col-md-2 control-label">Período Letivo:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<select name="periodo" id="selectPeriodo" class="form-control" required>
											<option value=""></option>
											<option value="1">1</option>
											<option value="2">2</option>
										</select>
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
									<label for="inputProfessor" class="col-xs-3 col-sm-2 col-md-2 control-label">Professor:</label>
									<div class="col-xs-8 col-sm-5 col-md-5">
										<select name="selectProfessor" id="selectProfessor" class="form-control" required>
											<option></option>
											<option>Guilherme Costa</option>
											<option>Fernando Gonçalves</option>
											<option>Wesley Tschiedel</option>
											<option>Welton Dias</option>
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
</html>