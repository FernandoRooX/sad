<!DOCTYPE html>
<html lang="pt-br">
    <?php
    $id = $_GET['idAluno'];
    session_start();
    $variavel = "coordenador";
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
        <?php
        $rs = mysql_query("select aluno.*, pessoa.* FROM aluno inner join pessoa on $id = pessoa.idPESSOA");
        $obj = mysql_fetch_object($rs);
        ?>
        <?php require_once '../topo.php'; ?>

        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Aluno: <?php echo $obj->nome; ?></h3>
                        </div>
                        <div class="form-group">
                            <label for="nome" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>

                            <?php echo $obj->nome; ?>

                        </div>
                        <div class="form-group">
                            <label for="matricula" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Matrícula:</label>
                            <?php echo $obj->matricula; ?>

                        </div>
                        <div class="form-group">
                            <label for="cpf" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">CPF:</label>
                            <?php echo $obj->cpf; ?>

                        </div>
                        <div class="form-group">
                            <label for="selectPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data de Nascimento:</label>
                            <?php echo $obj->dt_nascimento; ?>

                        </div>
                        <div class="form-group">
                            <label for="selectPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Telefone:</label>
                            <?php echo $obj->telefone; ?>

                        </div>
                        <div class="form-group">
                            <label for="selectPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">E-mail:</label>
                            <?php echo $obj->email; ?>

                        </div>
                        <div class="form-group">
                            <label for="selectPeriodo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Sexo:</label>
                            <?php echo $obj->sexo; ?>

                        </div>


                    </div>
                    <div class="row" style="padding-bottom:99px;">
                        <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="page-header">
                                <h3><span class="glyphicon glyphicon-th-list"></span> Disciplinas em dependência: </h3>
                            </div>
                            <?php
                            $rsDep = mysql_query("select * FROM dependencia WHERE ALUNO_cod = $obj->cod");
                            $linhas = mysql_num_rows($rsDep);
                            if ($linhas == 0) {
                                echo" <div class='form-group'>
                                    <label for='nome' class='col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label'>Não existe dependência para o aluno  $obj->nome.</label>


                                </div>";
                            } else {
                                
                                while ($objDep = mysql_fetch_object($rsDep)) {
                                    $rsDisc = mysql_query("select disciplina.*, dependencia.* FROM dependencia inner join disciplina on disciplina.cod = dependencia.cod WHERE dependencia.DISCIPLINA_cod='$objDep->DISCIPLINA_cod'");
                                    $objDisc = mysql_fetch_object($rsDisc);
                                    echo" <div class='form-group'>
                                    <label for='nome' class='col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label'>Nome:</label>
                                    <button type='button' class='btn btn-danger btn-xs'></button>
                                    $objDisc->nome

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