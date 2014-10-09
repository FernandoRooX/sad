<!DOCTYPE html>
<html lang="pt-BR">
    <?php
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Professor</title>

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
                    <a href="" class="navbar-brand">{Logo}</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../professor/index.php">Home</a></li>
                        <li class="active"><a href="../professor/notasFrequencia.php">Notas</a></li>
                        <!--<li><a href="#">Frequência</a></li>-->
                        <li><a href="#">Relatório</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> <?php echo $_SESSION['perfil']; ?></span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Editar Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="../logado.php?logout=acessar"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
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
                            <h3><span class="glyphicon glyphicon-th-list"></span> Notas</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="../professor/cadastrarNota.php"><button type="button" class="btn btn-success">Inserir Registros</button></a>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped bordered">
                                <thead class="h4">
                                    <tr>
                                        <th>Nome</th>
                                        <th>Disciplina</th>
                                        <th>Nota</th>
                                        <th>Frequência</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody class="h5">
                                    <tr>
                                        <td>Reuel Scarabele Cardoso</td>
                                        <td>Trabalho de Conclusão de Curso II</td>
                                        <td>6,0</td>
                                        <td>%</td>
                                        <td><button type="button" class="btn btn-warning btn-xs">Alterar Nota</button> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir Nota</button></td>
                                <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;<span class="sr-only">Sair</span></span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Tem certeza que deseja remover os registros?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                <button type="button" class="btn btn-danger">Sim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="text-center">
                            <ul class="pagination pagination-large">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="navbar navbar-inverse navbar-fixed-bottom">
            <div class="copyright">
                <div class="container container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <p>&copy; Todos os direitos reservados</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <script src="../js/jquery.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>