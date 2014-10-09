<!DOCTYPE html>
<?php
require_once '../classes/validaAcesso.php';
?>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Editar Curso</title>

	<link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="#" class="navbar-brand">{Logo}</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../secretaria/index.php">Home</a></li>
					<li><a href="../secretaria/alunos.php">Alunos</a></li>
					<li><a href="../secretaria/turmas.php">Turmas</a></li>
					<li><a href="../secretaria/disciplinas.php">Disciplinas</a></li>
					<li><a href="../secretaria/cursos.php">Cursos</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Usuário <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Alterar Senha</a></li>
							<li class="divider"></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>

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
								<div class="form-group row">
									<label for="inputCod" class="col-md-1 control-label">Código Usuário:</label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="inputCod" disabled required>
									</div>

									<label for="inputName" class="col-md-1 control-label">Nome:</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="inputName" required>
									</div>
									
									<label for="selectPerfil" class="col-md-1 control-label">Perfil:</label>
									<div class="col-md-2">
										<select name="perfil" class="form-control">
											<option value=""></option>
											<option value="coordenador">Coordenador</option>
											<option value="professor">Professor</option>
											<option value="secretaria">Secretária</option>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputCPF" class="col-md-1 control-label">CPF:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" required>
									</div>

									<label for="inputNasc" class="col-md-1 control-label">Nascimento:</label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="inputNasc" required>
									</div>

									<label for="inputPhone" class="col-md-1 control-label">Telefone:</label>
									<div class="col-md-2">
										<input type="phone" class="form-control" id="inputPhone" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputEndereco" class="col-md-1 control-label">Endereço:</label>
									<div class="col-md-4">
										<input type="text" class="form-control" id="inputEndereco" required>
									</div>

									<label for="inputComplemento" class="col-md-2 control-label">Complemento:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputComplemento" required>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputCidade" class="col-md-1 control-label">Cidade:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputCidade" required>
									</div>

									<label for="optionEstado" class="col-md-1 control-label">Estado:</label>
									<div class="col-md-1">
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

						<div class="col-md-offset-8">
							<button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#editar-success">Alterar</button>
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
							<a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-primary">Cancelar</button></a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer class="copyright">
		<div class="container container-fluid">
			<div class="row">
				<div class="col-md-12">
					<p>&copy; Todos os direitos reservados</p>
				</div>
			</div>
		</div>
	</footer>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>