<!DOCTYPE html>
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
						<h3><span class="glyphicon glyphicon-th-list"></span> Editar Curso</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-12">
								<div class="form-group row">
									<label for="inputCod" class="col-md-1 control-label">Código Curso:</label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="inputCod" disabled required>
									</div>

									<label for="inputNome" class="col-md-1 control-label">Nome:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputNome" required>
									</div>

									<label for="selectTipo" class="col-md-1 control-label">Tipo:</label>
									<div class="col-md-2">
										<select name="selectTipo" id="selectTipo" class="form-control" required>
											<option value=""></option>
											<option value="">Presencial</option>
											<option value="">Semipresencial</option>
											<option value="">EaD</option>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputOrientador" class="col-md-1 control-label">Orientador:</label>
									<div class="col-md-3">
										<input type="text" class="form-control" id="inputOrientador" required>
									</div>

									<label for="numberCH" class="col-md-1 control-label">Carga Horária:</label>
									<div class="col-md-2">
										<input type="number" class="form-control" id="inputCarga" required>
									</div>
								</div>

								<div class="col-md-offset-8">
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar-success">Alterar</button>
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
							</div>
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

	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>