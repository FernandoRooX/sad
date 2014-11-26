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
        //var_dump($obj);die();
        ?>
        <?php require_once '../topo.php'; ?>

        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <form method="post" action="banksaluno.php?acao=atualizar" class="form-horizontal" role="form">
                         
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Aluno: <?php echo $obj->nome; ?></h3>
                            <input type="hidden" name="idPessoa" id="idPessoa" value="<?php echo $obj->idPESSOA; ?>">
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                    <input type="text" class="form-control" name="nome" placeholder="Digite seu nome completo" maxlength="50" id="inputName" required value="<?php echo $obj->nome; ?>">
                                </div>
                            </div>
                            <div class="form-group has-error">
                                <label for="inputCpf" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">CPF:</label>
                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                    <input type="text" class="form-control" name="cpf" id="inputCpf" placeholder="000.000.000-00" maxlength="14" onkeypress="formatar('###.###.###-##', this);" required value="<?php echo $obj->cpf; ?>"/>
                                    <br>
                                    <div class="alert alert-warning" role="alert">CPF inválido!</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputMat" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Matrícula:</label>
                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                    <input type="text" class="form-control" name="matricula" placeholder="Matricula" id="inputMat" maxlength="11" required value="<?php echo $obj->matricula; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPhone" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Telefone:</label>
                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                    <input type="text" class="form-control" name="telefone" id="inputPhone" placeholder="00-0000-0000" maxlength="14" onkeypress="formatar('##-####-####', this);" required  value="<?php echo $obj->telefone; ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="radioSexo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Sexo:</label>
                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                    <label class="btn btn-primary">
                                        <input type="radio" name="sexo" id="optionMasculino" value="Masculino" <?php echo ($obj->sexo == 'Masculino') ? "checked='checked'" : ''; ?> > Masculino
                                    </label>

                                    <label class="btn btn-primary">
                                        <input type="radio" name="sexo" id="optionFeminino" value="Feminino" <?php echo ($obj->sexo == 'Feminino') ? "checked='checked'" : ''; ?> > Feminino
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputNasc" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nascimento:</label>
                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                    <input type="text" name="nascimento" class="form-control" id="inputNac" required value="<?php echo $obj->dt_nascimento; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">E-mail:</label>
                                <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                    <input type="text" name="email" class="form-control" id="inputEmail" maxlength="50" placeholder="Digite seu e-mail" value="<?php echo $obj->email; ?>">
                                </div>
                            </div>
                        </div>
                             
                        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-success">Editar</button>
                            <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
                        </div>
<<<<<<< HEAD


                    </div>
=======
                       
                    </div> 
                    </form>
>>>>>>> 41c89ff57a1e255f6d5c8307caaf5d59d970ab8d
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
                                    $objDisc->nome
                                    <button type='button' class='btn btn-danger btn-xs' data-toggle='modal' data-target='#modal-delete'>Excluir</button>
                                    <div class='modal fade' id='modal-delete' tabindex='-1' role='dialog' aria-labelledby='modal-delete' aria-hidden='true'>
                                        <div class='modal-dialog modal-sm'>
                                            <div class='modal-content'>
                                                <div class='modal-header'>
                                                    <button type='button' class='close' data-dismiss='modal'<span aria-hidden='true'>&times;</span><span class='sr-only'>Sair</span></button>
                                                </div>
                                                <div class='modal-body'>
                                                    <p>Tem certeza que deseja remover o aluno da dependência?</p>
                                                </div>
                                                <div class='modal-footer'>
                                                    <button type='button' class='btn btn-default' data-dismiss='modal'>Não</button>
                                                    <button type='button' class='btn btn-danger'>Sim</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
            <?php require_once '../inc/rodape.php'; ?>
=======
            </div>
        </div>        
       
>>>>>>> 41c89ff57a1e255f6d5c8307caaf5d59d970ab8d
    </body>
     
</html>