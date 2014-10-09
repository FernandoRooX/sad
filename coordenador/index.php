<!doctype html>
<html lang="pt-BR">
     <?php
require_once '../classes/validaAcesso.php';
?>
<head>
	<?php include_once '../inc/head.php';?>
	<title>Coordenação</title>
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
				<a class="navbar-brand" href="">{Logo}</a>
			</div>

			<div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">

                                    <li class="active"><a href="../logado.php">Home</a></li>
					<li><a href="../coordenador/alunos.php">Alunos</a></li>
					<li><a href="../coordenador/turmas.php">Turmas</a></li>
					<li><a href="../coordenador/disciplinas.php">Disciplinas</a></li>
                                        <li><a href="../coordenador/usuarios.php">Usuários</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> 
                                                    <?php echo $_SESSION['perfil']; ?> <span class="caret"></span></a>
						<ul class="dropdown-menu">
                                                    <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Editar Perfil</a></li>
							<li class="divider"></li>
							<li><a href="../logado.php?logout=acessar">Sair <span class="glyphicon glyphicon-log-out"></span></a></li>
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
						<h3><span class="glyphicon glyphicon-th-list"></span> Home</h3>
					</div>

					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="well">
								<h1>Bem Vindo(a) Coordenador(a)</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
            <?php include_once '../inc/rodape.php'; ?>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>