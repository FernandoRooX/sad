<!DOCTYPE html>
<html lang="pt-br">
    <?php
    require_once '../conecta.php';
    $idCurso = $_REQUEST['idCurso'];
    $variavel = 'secretaria';
    session_start();
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
        <?php require_once '../topo.php'; ?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cursos</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="cadastroCurso.php"><button type="button" class="btn btn-success">Novo Curso</button></a>
                                <a href="vincularTurmaCurso.php"><button type="button" class="btn btn-success">Vincular Turma a Curso</button></a>
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
                                        <td><input type="checkbox" name="teste" value="alo"/> alo</td>
                                    </tr>
                                   
                                    <?php
                                    $select = mysql_query("SELECT * FROM turma")or die(mysql_error());
                                    while ($dado = mysql_fetch_array($select)or die(mysql_error())) {
                                        echo"<tr>";
                                        echo"<td><input type='checkbox' name='turma[]' value'".$dado['cod']."'/>" . $dado['periodo'] . "</td>";
                                        echo"</tr>";
                                    }
                                    ?>
                                    <?php
                                    $select = mysql_query("SELECT * FROM turma")or die(mysql_error());
                                    while ($dado = mysql_fetch_array($select)) {
                                        echo "<tr>";
                                        echo "<td><input type='checkbox' name='turma[]' id='" . htmlentities($dado['periodo']) . "' value='" . htmlentities($dado['protocolo']) . "' />";
                                        echo "" . htmlentities($dado['nome']) . " </td>";
                                        echo "</tr>";
                                    }
                                    ?>


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
    $(function () {
        $('#table').searchable({
            searchField: '#container-search',
        })
    });
</script>
</body>
</html>
