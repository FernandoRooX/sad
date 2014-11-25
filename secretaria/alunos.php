<!DOCTYPE html>
<html lang="pt-br">
    <?php session_start(); 
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Dados Alunos</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    </head>
    <body>
        <?php require_once "../topo.php" ?>
    <div class="wrapper" role="main">
        <div class="container-fluid container">
            <div class="row">
                <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="page-header">
                        <h3><span class="glyphicon glyphicon-th-list"></span> Alunos Cadastrados</h3>
                    </div>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <a href="../secretaria/cadastroAluno.php"><button type="button" class="btn btn-success">Novo Aluno</button></a>
                        </div>
                    </div>

                    <hr>

                    <div class="row">
                        <div class="col-lg-4">
                            <input type="search" id="container-search" class="form-control" placeholder="Pesquisar...">
                        </div>
                    </div>

                    <div class="table-responsive" id="table">
                        <table class="table bordered">
                            <thead class="h4">
                                <tr>
                                    <th>Nome</th>
                                    <th>RA</th>
                                    <th>Disciplina</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody class="h5">
                                <tr>
                                    <td>Reuel Scarabele Cardoso</td>
                                    <td>1158387827</td>
                                    <td>Trabalho de Conclusão de Curso II</td>
                                    <td><button type="button" class="btn btn-warning btn-xs">Alterar</button>
                                </tr>
                            </tbody>
                            <tbody class="h5">
                                <tr>
                                    <td>Fernando de Jesus Ribeiro</td>
                                    <td>2547450767</td>
                                    <td>Trabalho de Conclusão de Curso II</td>
                                    <td><button type="button" class="btn btn-warning btn-xs">Alterar</button>
                                </tr>
                            </tbody>
                            <tbody class="h5">
                                <tr>
                                    <td>Thiago Couto Godoy</td>
                                    <td>1183386900</td>
                                    <td>Trabalho de Conclusão de Curso II</td>
                                    <td><button type="button" class="btn btn-warning btn-xs">Alterar</button>
                                </tr>
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
                searchField: '#container-search'
            });
        });
    </script>
</body>
</html>