<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Editar Turma</title>

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
						<h3><span class="glyphicon glyphicon-th-list"></span> Editar Turma</h3>
					</div>

					<form method="post" action="" class="form-horizontal" role="form">
						<div class="form-group">
							<div class="col-md-12">
								<div class="form-group row">
									<label for="inputCod" class="col-md-1 control-label">Código Turma:</label>
									<div class="col-md-2">
										<input type="text" class="form-control" id="inputCod" disabled required>
									</div>

									<label for="inputName" class="col-md-1 control-label">Nome:</label>
									<div class="col-md-4">
										<input type="text" class="form-control" id="inputName" required>
									</div>

									<label for="selectDependencia" class="col-md-1 control-label">Dependência:</label>
									<div class="col-md-1">
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

								<div class="form-group row">
									<label for="dateBegin" class="col-md-1 control-label">Data Inicial:</label>
									<div class="col-md-2">
										<div class="input-group date">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
											<input type="date" class="form-control">
										</div>
									</div>

									<label for="dateEnd" class="col-md-1 control-label">Data Final:</label>
									<div class="col-md-2">
										<div class="input-group date">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-calendar"></span>
											</span>
											<input type="date" class="form-control">
										</div>
									</div>

									<label for="Hora" class="col-md-1 control-label">Hora:</label>
									<div class="col-md-2">
										<div class="input-group time">
											<span class="input-group-addon">
												<span class="glyphicon glyphicon-time"></span>
											</span>
											<input type="text" class="form-control" />
										</div>
									</div>

									<label for="selectActive" class="col-md-1 control-label">Ativo:</label>
									<div class="col-md-2">
										<select name="active" id="active" class="form-control">
											<option></option>
											<option>Sim</option>
											<option>Não</option>
										</select>
									</div>
								</div>

								<div class="form-group row">
									<label for="inputProf" class="col-md-1 control-label">Professor:</label>
									<div class="col-md-3">
										<select name="selectProf" id="selectProf" class="form-control" required>
											<option></option>
											<option>Guilherme Costa</option>
											<option>Fernando Gonçalves</option>
											<option>Wesley Tschiedel</option>
											<option>Welton Dias</option>
										</select>
									</div>

									<label for="selectDisciplina" class="col-md-1 control-label">Disiciplina:</label>
									<div class="col-md-3">
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