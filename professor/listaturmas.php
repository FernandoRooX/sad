<!DOCTYPE html>
<html lang="pt-br">
    <?php
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php require_once '../inc/head.php'; ?>

        <title>Sistema de Apoio a Dependencia</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>

        <?php require_once "../topo.php"; ?>

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

                        <div class="table-responsive">
                            <table class="table table-striped bordered">
                                <thead class="h4">
                                    <tr>
                                        <th>Nome</th>
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
    </body>
</html>
