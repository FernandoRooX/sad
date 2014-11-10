<!DOCTYPE html>
<html lang="pt-br">
    <?php
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php require_once '..../../../inc/head.php'; ?>

        <title>Sistema de Apoio a Dependencia</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-fluid container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="" class="navbar-brand">Logo</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="logado.php">Home</a></li>
                        <li><a href="./secretaria/index.php">Secretária</a></li>
                        <li><a href="./professor/index.php">Professor</a></li>
                        <li><a href="./coordenador/index.php">Coordenador</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>
                                <?php echo $_SESSION['perfil'] ?> 
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../logado.php?logout=acessar"> Sair<span class="glyphicon glyphicon-log-out"></span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Lista de Turmas</h3>
                        </div>

                        <div class="row">
                            <div class="col-md-10">
                                <button type="button" class="btn btn-success">Cadastrar Turma</button>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="table-responsive">
                            <table class="table table-striped bordered">
                                <thead class="h4">
                                    <tr>
                                        <th>Nome <span class="glyphicon glyphicon-search"></span></th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody class="h5">
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
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
                                                <button type="button" class="btn btn-danger">Sim</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </tr>
                                </tbody>
                                <tbody class="h5">
                                    <tr>
                                        <td></td>
                                        <td><button type="button" class="btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn-danger btn-xs">Excluir</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="navbar navbar-fixed-bottom">
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

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

    </body>
</html>
