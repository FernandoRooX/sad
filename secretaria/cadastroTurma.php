<!doctype html>
<html lang="pt-BR">
    <?php session_start(); ?>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Cadastro de Turma</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap-datetimepicker.min.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid container">
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
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['perfil']; ?> <span class="caret"></span></a>
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
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Turma</h3>
                        </div>

                        <form class="form-horizontal" method="post" action="banksturmas.php?acao=adicionando" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" name="nome" class="form-control" placeholder="Digite o nome da turma" maxlength="50" id="inputName" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="Date" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <div class="input-group date">
                                                <input type="date" name="date" class="form-control  ">
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
                                                <input type="time" name="hora" class="form-control" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="form-group">
                                        <label for="inputDisponibilidade" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disponibilidade:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectDisponibilidade" id="selectDisponibilidade" class="form-control" required="">
                                                <option value="">Tutores Disponíveis</option>
                                                <option value="Guilherme Costa">Guilherme Costa</option>
                                                <option value="Fernando Gonçalves">Fernando Gonçalves</option>
                                                <option value="Wesley Tschiedel">Wesley Tschiedel</option>
                                                <option value="Welton Dias">Welton Dias</option>
                                                <option value="Rodrigo Porto">Rodrigo Porto</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectDependencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Dependência:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectDependencia" id="selectDependencia" class="form-control" required>
                                                <option value="">Tipos de Dependência</option>
                                                <option value="RDR">RDR</option>
                                                <option value="STR">STR</option>
                                                <option value="GTR">GTR</option>
                                                <option value="TRT">TRT</option>
                                                <option value="STER">STER</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectHabilitado" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Habilitado:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectHabilitado" id="selectHabilitado" class="form-control">
                                                <option value="">Componentes Curriculares</option>
                                                <option value="Programacao Estruturada">Programação Estruturada</option>
                                                <option value="Programacao Orientado a Objetos">Programacao Orientada a Objetos</option>
                                                <option value="Redes de Computadores">Redes de Computadores</option>
                                                <option value="Programacao Comercial">Programação Comercial</option>
                                                <option value="Sistemas Operacionais">Sistemas Operacionais</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                        <a href="javascript:window.history.go(-2)"><button type="button" class="btn btn-warning">Cancelar</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php require_once '../inc/rodape.php'; ?>
    </body>
</html>