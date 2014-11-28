<!DOCTYPE html>
<html lang="pt">
    <?php 
    session_start();
    $variavel = "secretaria";
    require_once '../classes/validaAcesso.php';
    require_once '../conecta.php';
    
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Disciplinas</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <?php require_once "../topo.php"; ?>

        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Disciplinas Cadastradas</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="../secretaria/cadastrodisciplina.php"><button type="button" class="btn btn-success">Nova Disciplina</button></a>
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
                                        <th>Código</th>
                                        <th>Disciplina</th>
                                        <th>Professor</th>
                                        <th>Situação</th>
                                        <th>Carga Horaria</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody class="h5">
                                    <?php
                                   $rs = mysql_query ("select disciplina.*, pessoa.idPESSOA from disciplina inner join pessoa on (disciplina.nome = pessoa.nome);");
                                    #$rs = mysql_query("select * FROM disciplina ORDER BY nome");
                                    while ($obj = mysql_fetch_object($rs)or die(mysql_error())){
                                        
                                        #$rs = mysql_query("select nome FROM pessoa where pessoa_idpessoa=nome_idnome ORDER BY nome");
                                    #while ($obj = mysql_fetch_object($rs)) {
                                        ?>

                                        <tr>
                                            <td><?php echo $obj->cod;?></td>
                                            <td><?php echo $obj->nome; ?></td>
                                            <td><?php echo $obj->situacao; ?></td>
                                            <td><?php echo $obj->carga_horaria; ?></td>
                                            <td><button type="button" class="btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir</button></td>
                                    <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
                                                </div>
                                                <div class="modal-body">
                                                    <p>Tem certeza que deseja remover essa disciplina?</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                    <button type="button" class="btn btn-danger">Sim</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </tr>
                                <?php } ?>
                                </tbody>
                            </table>
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