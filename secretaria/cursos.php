<!DOCTYPE html>
<html lang="pt-br">
    <?php session_start(); ?>
    <head>
        <?php include_once '../inc/head.php'; ?>

        <title>Cursos</title>

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
                        <li><a href="../secretaria/index.php">Home</a></li>
                        <li><a href="../secretaria/alunos.php">Alunos</a></li>
                        <li><a href="../secretaria/turmas.php">Turmas</a></li>
                        <li><a href="../secretaria/disciplinas.php">Disciplinas</a></li>
                        <li class="active"><a href="../secretaria/cursos.php">Cursos</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><?php echo $_SESSION['perfil']; ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-cog"></span>Editar Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="../logado.php?logout=acessar"><span class="glyphicon glyphicon-log-out"></span> Sair </a></li>
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
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cursos</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="../secretaria/cadastroCurso.php"><button type="button" class="btn btn-success">Novo Curso</button></a>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-lg-4">
                                <input type="search" id="container-search" class="form-control" placeholder="Search...">
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table bordered">
                                <thead class="h4">
                                    <tr>
                                        <th>Curso</th>
                                        <th>Orientador</th>
                                        <th>Tipo</th>
                                        <th>Carga Horária</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="h5">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><button type="button" class="btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir</button></td>
                                <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Tem certeza que deseja remover essa turma?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                <button type="button.btn.btn-danger">Sim</button>
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
    </div>
</div>
</div>
</div>
<?php include_once '../inc/rodape.php'; ?>
<script>
    $(function() {
        $('#table').searchable({
            searchField: '#container-search',
        })
    });
</script>
</body>
</html>