<!DOCTYPE html>
<html lang="pt-br">
    <?php session_start(); 
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Alunos</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                        <li><a href="../coordenador/index.php">Home</a></li>
                        <li class="active"><a href="../coordenador/alunos.php">Alunos</a></li>
                        <li><a href="../coordenador/turmas.php">Turmas</a></li>
                        <li><a href="../coordenador/disciplinas.php">Disciplinas</a></li>
                        <li><a href="../coordenador/usuarios.php">Usuários</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['perfil']; ?> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Editar Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="../logado.php?logout=acessar"><span class="glyphicon glyphicon-log-out"> Sair</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Alunos Cadastrados</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="../coordenador/cadastroAluno.php"><button type="button" class="btn btn-success">Novo Aluno</button></a>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-4">
                                <input type="search" id="container-search" class="form-control" placeholder="Search...">
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-striped bordered">
                                <thead class="h4">
                                    <tr>
                                        <th id="name">
                                            <span id="nameHeader" style="cursor:pointer;">Nome</span>
                                            <span id="nameCaret" class="caret" style="display:none;"></span>
                                            <span id="namePesquisarIcon" class="glyphicon glyphicon-search"></span>
                                <div id="namePesquisarDiv" class="hide">
                                    <div class="input-group">
                                        <input type="text" id="nameInput" class="form-control" />
                                        <span class="input-group-btn">
                                            <button id="nameApagarPesquisa" class="btn btn-default" type="button" onclick="removerFiltro('nome')"><span class="glyphicon glyphicon-remove"></span></button>
                                        </span>
                                    </div>
                                </div>
                                <span id="nameApagarPesquisaIcon" class="glyphicon glyphicon-remove-sign" style="display:none;"></span>
                                </th>
                                <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody class="h5">
                                    <tr>
                                        <td>Reuel Scarabele Cardoso</td>
                                        <td><button type="button" class="btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir</button></td>
                                <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                    <div class="modal-dialog modal-sm">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Tem certeza que deseja remover esse aluno?</p>
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
        <?php require_once '../inc/rodape.php'; ?>
    </body>
</html>