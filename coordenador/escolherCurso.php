<!DOCTYPE html>
<html lang="pt-br">
    <?php 
    require_once '../conecta.php';
    $variavel = 'coordenador';
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
        <?php        require_once '../topo.php';?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Escolher Curso</h3>
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
                                        
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody class="h5">
                                    <?php 
                                    $select = mysql_query("SELECT * FROM curso")or die(mysql_error());
                                    while($dado = mysql_fetch_array($select)){
                                        echo"<tr>";
                                        echo"<td><a href='vincularTurmaCurso.php?idCurso=".$dado['cod']."'>".$dado['nome']."</td>";
                                        echo"<td><a href='vincularTurmaCurso.php?idCurso=".$dado['cod']."'>".$dado['orientador']."</td>";
                                        echo"<td><a href='vincularTurmaCurso.php?idCurso=".$dado['cod']."'>".$dado['modalidade']."</td>";
                                        echo"</a> </tr>";
                                    }
                                    
                                    ?>
                                    
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                      
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
