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
						<h3><span class="glyphicon glyphicon-th-list"></span> Editar Usuário</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-12">
								<div class="form-group">
									<label for="inputName" class="col-xs-3 col-sm-2 col-md-1 control-label">Nome:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="text" class="form-control" id="inputName" required>
									</div>
								</div>

								<div class="form-group">
									<label for="selectPerfil" class="col-xs-3 col-sm-2 col-md-1 control-label">Perfil:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<select name="perfil" class="form-control">
											<option value=""></option>
											<option value="coordenador">Coordenador</option>
											<option value="professor">Professor</option>
											<option value="secretaria">Secretária</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label for="inputCPF" class="col-xs-3 col-sm-2 col-md-1 control-label">CPF:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="text" class="form-control" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputNasc" class="col-xs-3 col-sm-2 col-md-1 control-label">Nascimento:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="text" class="form-control" id="inputNasc" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputPhone" class="col-xs-3 col-sm-2 col-md-1 control-label">Telefone:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="phone" class="form-control" id="inputPhone" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputEndereco" class="col-xs-3 col-sm-2 col-md-1 control-label">Endereço:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="text" class="form-control" id="inputEndereco" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputComplemento" class="col-xs-3 col-sm-2 col-md-1 control-label">Complemento:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="text" class="form-control" id="inputComplemento" required>
									</div>
								</div>

								<div class="form-group">
									<label for="inputCidade" class="col-xs-3 col-sm-2 col-md-1 control-label">Cidade:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<input type="text" class="form-control" id="inputCidade" required>
									</div>
								</div>

								<div class="form-group">
									<label for="optionEstado" class="col-xs-3 col-sm-2 col-md-1 control-label">Estado:</label>
									<div class="col-xs-8 col-sm-5 col-md-3">
										<select name="selectEstado" id="selectEstado" class="form-control" required>
											<option></option>
											<option>AM</option>
											<option>PA</option>
											<option>BA</option>
											<option>TO</option>
											<option>DF</option>
											<option>MA</option>
											<option>CE</option>
											<option>RJ</option>
											<option>SP</option>
										</select>
									</div>
								</div>
							</div>
						</div>

						<div class="pull-right col-sm-8 col-md-10">
							<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#editar-success">Alterar</button>
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
					</form>
				</div>
			</div>
		</div>
	</div>

	<?php include '../inc/rodape.php'; ?>
</body>
</html>