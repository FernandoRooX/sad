<!DOCTYPE html>
<html lang="pt-br">
    <?php 
    session_start();
    $variavel = "Professor";
    require_once '../classes/validaAcesso.php';
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
        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Turmas Cadastradas</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="../coordenador/cadastroTurma.php"><button type="button" class="btn btn-success">Nova Turma</button></a>
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
                                        <th>Nome <span class="glyphicon glyphicon-search"></span></th>
                                        <th>Professor</th>
                                        <th>Turma Ativa</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tbody class="h5">
                                    <?php
                                        $rs = mysql_query("select turma.*, curso.* FROM turma inner join curso on turma.CURSO_cod = curso.cod ORDER BY nome");
                                        while ($obj = mysql_fetch_object($rs)) {
                                    ?>

                                    <tr>
                                        <td>
                                            <?php echo("<a href='perfilTurma.php?idTurma=" . $obj->turma_cod . "' > " . $obj->periodo . "/" . $obj->ano . " - " . $obj->turno . " - " . $obj->nome." - " . $obj->modalidade." </a>"); ?>
                                        </td>
                                        <td>
                                            <?php
                                                $codigo = $obj->PROFESSOR_cod;
                                                $rsCodPessoa = mysql_query("SELECT PESSOA_idPESSOA FROM professor WHERE cod=$codigo");
                                                $objCodPessoa = mysql_fetch_object($rsCodPessoa);
                                                $codPessoa = $objCodPessoa->PESSOA_idPESSOA;
                                                $rsProf = mysql_query("select professor.*, pessoa.* FROM professor inner join pessoa on $codPessoa= pessoa.idPESSOA ORDER BY nome");
                                                $objProf = mysql_fetch_object($rsProf);
                                                echo $objProf->nome;
                                            ?>
                                        </td>

                                        <td><?php $mes = date('m');
                                                  $ano = date('Y');
                                                  if(($obj->periodo == 1)){
                                                      if(($mes<7) &&($obj->ano ==$ano)){
                                                          echo"Ativa";
                                                      }else{
                                                          echo"Inativa";
                                                      }
                                                  }else if(($obj->periodo == 2)){
                                                      if(($mes>6)&&($obj->ano ==$ano)){
                                                          echo"Ativa";
                                                      }else{
                                                          echo"Inativa";
                                                      }
                                                      }else{echo"nao deu";}
                                                  ?>
                                        </td>
                                        <!--<td><button type="button" class="btn btn-warning btn-xs">Editar</button> <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir</button></td>-->
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
                                    <?php }?>
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