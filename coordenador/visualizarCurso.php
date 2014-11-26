<!DOCTYPE html>
<html lang="pt-br">
    <?php
    $id = $_GET['cod'];
    session_start();
    $variavel = "coordenador";
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Visualizar</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
        <?php
        $rs = mysql_query("select * FROM curso ORDER BY nome");
        $obj = mysql_fetch_object($rs);
        ?>
        <?php require_once '../topo.php'; ?>

        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Curso: <?php echo $obj->nome; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>

                            <?php echo $obj->nome; ?>

                        </div>
                        <div class="form-group">
                            <label for="orientador" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Orientador</label>
                            <?php echo $obj->orientador; ?>

                        </div>
                        <div class="form-group">
                            <label for="modalidade" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Modalidade:</label>
                            <?php echo $obj->modalidade; ?>

                                            </div>
                    <div class="row">
                        <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="page-header">
                                <h3><span class="glyphicon glyphicon-th-list"></span> Disciplinas: </h3>
                            </div>
                            <?php
                            $rsDis = mysql_query("select * FROM disciplina WHERE cod = $obj->cod");
                            $linhas = mysql_num_rows($rsDis);
                            if ($linhas == 0) {
                                echo" <div class='form-group'>
                                    <label for='nome' class='col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label'>Não Existem disciplinas para o curso cadastrado  $obj->nome</label>


                                </div>";
                            } else {
                                while ($objDis = @mysql_fetch_object($rsDis)) {
                                    #$rsDis = mysql_query("select nome, situacao FROM disciplina'$objDis->nome'");
                                    $rsDes = @mysql_query("select curso.*, disciplina.* FROM disciplina inner join curso on curso.cod = disciplina cod WHERE curso.disciplina_cod='$objDis->disciplina_cod '");
                                    $objDis = @mysql_fetch_object($rsDes);
                                    
                                    echo" <div class='form-group'>
                                    <label for='nome' class='col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label'>Nome:</label>
                                    isset $objDis->nome
                                </div>";
                                }
                            }
                                ?>


                            </div>
                        </div>
                    </div>
                </div>
                <?php require_once '../inc/rodape.php'; ?>
    </body>
</html>
