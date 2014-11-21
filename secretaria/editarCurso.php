<!DOCTYPE html>
<?php
require_once '../classes/validaAcesso.php';
?>
<html lang="pt-BR">
<head>
	<?php require_once "../inc/head.php"; ?>

	<title>Editar Curso</title>

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
						<h3><span class="glyphicon glyphicon-th-list"></span> Editar Curso</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-12">
								<div class="form-group">
									<label for="inputNome" class="col-xs-3 col-sm-2 col-md-1 control-label">Nome:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="text" class="form-control" id="inputNome" required>
									</div>
								</div>

								<div class="form-group">
									<label for="selectTipo" class="col-xs-3 col-sm-2 col-md-1 control-label">Tipo:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<select name="selectTipo" id="selectTipo" class="form-control" required>
											<option value=""></option>
											<option value="">Presencial</option>
											<option value="">Semipresencial</option>
											<option value="">EaD</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputOrientador" class="col-xs-3 col-sm-2 col-md-1 control-label">Orientador:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="text" class="form-control" id="inputOrientador" required>
									</div>
								</div>

								<div class="form-group">
									<label for="numberCH" class="col-xs-3 col-sm-2 col-md-1 control-label">Carga Horária:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="number" class="form-control" id="inputCarga" required>
									</div>
								</div>

								<div class="pull-right col-sm-8 col-md-10">
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

	<?php include_once '../inc/rodape.php'; ?>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>