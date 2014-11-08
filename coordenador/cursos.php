<!DOCTYPE html>
<html lang="pt-br">
    <?php session_start();
    $variavel = "Coordenador";
    require_once '../classes/validaAcesso.php';
    ?>
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
        <?php        require_once '../topo.php';?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cursos</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="../coordenador/cadastroCurso.php"><button type="button" class="btn btn-success">Novo Curso</button></a>
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
                                        <td><a href="../coordenador/editarCurso.php" type="button" class="btn btn-warning btn-xs">Editar</a> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir</button></td>
                                        <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <p>Tem certeza que deseja remover esse curso?</p>
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
