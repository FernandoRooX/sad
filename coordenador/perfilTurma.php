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
<<<<<<< HEAD
                                        <th>Alunos <span class="glyphicon glyphicon-search"></span></th>
                                        <th>Nota</th>
                                        <!--<th>Nota 2</th>-->
                                        <th>Nota Final</th>
=======
                                        <th>Alunos</th>
                                        <th>Nota</th>
                                        <th>Frequência</th>
>>>>>>> 41c89ff57a1e255f6d5c8307caaf5d59d970ab8d
                                    </tr>
                                </thead>
                                <tbody class="h5">
                                    <form method="post" action="banksnota.php?acao=adicionar" class="form-horizontal" role="form" >
                                        <tr>
<<<<<<< HEAD

                                            <td><?php
                                                $idAluno = $objTurma->ALUNO_cod;
                                                $rsPessoa = mysql_query("select * FROM aluno WHERE cod='$idAluno'");
                                                $objPessoa = mysql_fetch_object($rsPessoa)or die(mysql_error());
                                                $idPessoa = $objPessoa->PESSOA_idPESSOA;
                                                $rsAluno = mysql_query("select aluno.*, pessoa.* FROM aluno inner join pessoa on '$idPessoa' = pessoa.idPESSOA ORDER BY nome");
                                                $objAluno = mysql_fetch_object($rsAluno)or die(mysql_error());
                                                echo $objAluno->nome;
                                                ?></td>
                                        <input type="hidden" name='idAluno' value='<?php echo $idAluno; ?>'/>
                                        <input type="hidden" name='idTurma' value='<?php echo $idTurma; ?>'/>
                                        <td><?php
                                            echo"<input type='text' name='nota' value='$objTurma->Nota 'class='form-control'  id='inputName' maxlength='5'  size='2'>";
                                                ?>

                                        </td>
                                        <td><?php
                                        #echo"<input type='text' name='nota2' value='$objTurma->nota2' class='form-control'   id='inputName' maxlength='5'  size='2'>";
                                                ?>
                                        </td>
                                        <td><?php
                                        #if (($objTurma->Nota = null) && ($objTurma->nota1 == null)) {
                                        if ($objTurma->Nota = null) {
                                            echo "Nenhuma nota cadastrada.";
                                        } 
                                        #else if (($objTurma->nota != null) && ($objTurma->nota2 != null)) {
                                            #$nota_final = (($objTurma->nota2) + ($objTurma->nota1)) / 2;
                                            $nota_final = $objTurma->Nota;
                                            if ($nota_final < 6) {
                                                echo "<font color='red'>" . $nota_final . "</font>";
                                            } else {
                                                echo "<font color='green'>" . $nota_final . "</font>";
                                            }
                                    }
                                        //  echo"<input type='text' name='notafinal' value='$objTurma->nota_final'class='form-control'  id='inputName' maxlength='5' size='2'>";
                                                ?>
                                            <input type='hidden' name='notafinal' value='<?php echo $nota_final; ?>'class='form-control'  id='inputName' maxlength='5' size='2'>

                                        </td>
                                        <td><button type="submit"  class="btn btn-warning btn-xs">Salvar</button> </td>

                                        </tr>
                                    </form>
                                 } ?>
=======
                                            <td>Teste</td>
                                            
                                            <input type="hidden" name='idAluno' value='<?php echo $idAluno;?>'/>
                                            <input type="hidden" name='idTurma' value='<?php echo $idTurma;?>'/>
                                            
                                            <td>
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <input type='text' name='nota-final' class="form-control" id='inputName' maxlenght='5' size='2'>
                                                    </div>
                                                </div>
                                            </td>
                                            
                                            <td>
                                                <div class="form-group">
                                                    <div class="controls">
                                                        <label class="btn btn-primary">
                                                            <input type="checkbox" id="freq1" value="option1"> Aula 1
                                                        </label>

                                                        <label class="btn btn-primary">
                                                            <input type="checkbox" id="freq2" value="option2"> Aula 2
                                                        </label>
                                                        
                                                        <label class="btn btn-primary">
                                                            <input type="checkbox" id="freq3" value="option3"> Aula 3
                                                        </label>
                                                        
                                                        <label class="btn btn-primary">
                                                            <input type="checkbox" id="freq4" value="option4"> Aula 4
                                                        </label>
                                                        
                                                        <label class="btn btn-primary">
                                                            <input type="checkbox" id="freq5" value="option5"> Aula 5
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><button type="submit"  class="btn btn-success btn-xs">Salvar</button></td>
                                        </tr>
                                    </form>
>>>>>>> 41c89ff57a1e255f6d5c8307caaf5d59d970ab8d
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
        <?php include_once '../inc/rodape.php'; ?>
    </body>
</html>