<!doctype html>
<html lang="pt-BR">
    <?php session_start(); 
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Cadastro de Disciplina</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

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
                        <li><a href="../coordenador/index.php">Home</a></li>
                        <li><a href="../coordenador/alunos.php">Alunos</a></li>
                        <li><a href="../coordenador/turmas.php">Turmas</a></li>
                        <li><a href="../coordenador/disciplinas.php">Disciplinas</a></li>
                        <li><a href="../coordenador/cadastroUsuario.php">Usuários</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['perfil']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Editar Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="../logado.php?logout=acessar"> <span class="glyphicon glyphicon-log-out">Sair </span></a></li>
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
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Disciplina</h3>
                        </div>

                        <form method="post" action="" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="inputCod" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Protocolo:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputCod" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputDisciplina" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disciplina:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputDisciplina" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="numberCarga" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Carga Horária:</label>
                                        <div class="col-xs-6 col-sm-5 col-md-7 col-lg-5">
                                            <input type="number" name="ch" class="form-control" id="inputCarga" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Período Letivo:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputPeriodo" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="selectSerie" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Série:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectSerie" id="selectSerie" class="form-control" required>
                                                <option value="">Selecione</option>
                                                <option value="1°">1º</option>
                                                <option value="2°">2º</option>
                                                <option value="3°">3º</option>
                                                <option value="4°">4º</option>
                                                <option value="5°">5º</option>
                                                <option value="6°">6º</option>
                                                <option value="7°">7º</option>
                                                <option value="8°">8º</option>
                                                <option value="9°">9º</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="selectDependencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Dependência:</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectDependencia" id="selectDependencia" class="form-control" required>
                                                <option value="">Selecione</option>
                                                <option value="rdr">RDR</option>
                                                <option value="str">STR</option>
                                                <option value="gtr">GTR</option>
                                                <option value="trt">TRT</option>
                                                <option value="ster">STER</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputProfessor" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Professor:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectProfessor" id="selectProfessor" class="form-control" required>
                                                <option value="">Selecione</option>
                                                <option value="Guilerme Costa">Guilherme Costa</option>
                                                <option value="Fernando Goncalves">Fernando Gonçalves</option>
                                                <option value="Wesley Tschiedel">Wesley Tschiedel</option>
                                                <option value="Welton Dias">Welton Dias</option>
                                                <option value="Rodrigo Porto">Rodrigo Porto</option>
                                                <option value="Daniel Dantas">Daniel Dantas</option>
                                                <option value="Jane">Jane</option>
                                                <option value="Cíntia">Cíntia</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="pull-right">
                                        <button type="button" class="btn btn-success">Cadastrar</button>
                                        <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
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