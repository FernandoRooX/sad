<!DOCTYPE html>
<html lang="pt-br">
    <?php
    session_start();
    $variavel = "coordenador";
    require_once '../classes/validaAcesso.php';
    $idTurma = $_GET['idTurma'];
    ?>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Turmas</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <?php require_once '../topo.php'; ?>
        <?php
        $rs = mysql_query("select turma.*, curso.* FROM turma inner join curso on turma.CURSO_cod = curso.cod WHERE turma_cod='$idTurma'");
        $obj = mysql_fetch_object($rs);
        ?>
        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Turma: <?php echo $obj->periodo . "/" . $obj->ano . " - " . $obj->turno . " - " . $obj->nome . " - " . $obj->modalidade; ?> </h3>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-striped bordered">
                                <thead class="h4">
                                    <tr>
                                        <th>Alunos <span class="glyphicon glyphicon-search"></span></th>
                                        <th>Nota Final</th>
                                    </tr>
                                </thead>
                                <tbody class="h5">
                                    <?php
                                    $rsTurma = mysql_query("select * FROM dependencia WHERE TURMA_cod='$idTurma'");
                                    while ($objTurma = mysql_fetch_object($rsTurma)or die(mysql_error())) {
                                        ?>
                                    <form method="post" action="banksnota.php?acao=adicionar" class="form-horizontal" role="form" >
                                        <tr>

                                            <td>
                                                <?php
                                                    $idAluno = $objTurma->ALUNO_cod;
                                                    $rsPessoa = mysql_query("select * FROM aluno WHERE cod='$idAluno'");
                                                    $objPessoa = mysql_fetch_object($rsPessoa)or die(mysql_error());
                                                    $idPessoa = $objPessoa->PESSOA_idPESSOA;
                                                    $rsAluno = mysql_query("select aluno.*, pessoa.* FROM aluno inner join pessoa on '$idPessoa' = pessoa.idPESSOA ORDER BY nome");
                                                    $objAluno = mysql_fetch_object($rsAluno)or die(mysql_error());
                                                    echo $objAluno->nome;
                                                ?>
                                            </td>
                                            <input type="hidden" name='idAluno' value='<?php echo $idAluno; ?>'/>
                                            <input type="hidden" name='idTurma' value='<?php echo $idTurma; ?>'/>

                                            <td>
                                                <!--<?php
                                                    echo"<input type='text' name='notafinal' value='$objTurma->nota_final'class='form-control'  id='inputName' maxlength='5' size='2'>";
                                                    if ($nota_final == null) {
                                                        echo "Nenhuma nota cadastrada.";
                                                    } else if ($nota_final < 5) {
                                                            echo "<font color='red'>" . $nota_final . "</font>";
                                                        } else {
                                                            echo "<font color='green'>" . $nota_final . "</font>";
                                                        }
                                                    }
                                                ?>-->

                                                <?php
                                                    echo"<input type='text' name='notafinal' value='$objTurma->nota_final'class='form-control'  id='inputName' maxlength='5' size='2'>";
                                                    if($objTurma == null) {
                                                        if($nota_final == null) {
                                                            echo "Nenhuma nota cadastrada";
                                                        } else if ($nota_final < 5) {
                                                            echo "<font color='red'>" . $nota_final . "</font>";
                                                        } else {
                                                            echo "<font color='green'>" . $nota_final . "</font>";
                                                        }
                                                    }
                                                ?>
                                                <input type='hidden' name='notafinal' value='<?php echo $nota_final; ?>'class='form-control'  id='inputName' maxlength='5' size='2'>
                                            </td>
                                            
                                            <td><button type="submit"  class="btn btn-success btn-xs">Salvar</button> </td>
                                        </tr>
                                    </form>
                                <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../inc/rodape.php'; ?>
    </body>
</html>