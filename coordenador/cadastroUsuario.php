
<!doctype html>
<html lang="pt-BR">
    <?php
    $variavel = "coordenador";
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Cadastro de Usuário</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <?php require_once '../topo.php';?>
<?php        require_once '../conecta.php';?>;
        <div class="wrapper" roel="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Usuário</h3>
                        </div>

                        <form method="post" action="banksusuario.php?acao=adicionar" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="optionEstado" class="col-xs-3 col-sm-2 col-md-2 control-label">Pessoa</label>
                                        <div class="col-xs-8 col-sm-5 col-md-6">
                                            <select name="selectPessoa" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione</option>
                                              <?php 
                                              $rs = mysql_query("SELECT idPESSOA, nome, cpf FROM pessoa ORDER BY nome");
                                              while ($obj = mysql_fetch_object($rs)) {
                                                  $select = mysql_query("SELECT PESSOA_idPESSOA FROM aluno where PESSOA_idPESSOA ='".$obj->idPESSOA."'");
//                                                  if(mysql_num_rows($select)>0){
//                                                      continue;
//                                                  }else{
                                                      echo("<option value='" . $obj->idPESSOA . "' > " . $obj->nome . "-". $obj->cpf." </option>");
                                                  //}
                                            
                                              }?>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLogin" class="col-xs-3 col-sm-2 col-md-2 control-label">Login</label>
                                        <div class="col-xs-8 col-sm-5 col-md-6">
                                            <input type="text" class="form-control" name="login" placeholder="Digite o login a ser utilizado" maxlength="50"  id="inputLogin" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputsenha" class="col-xs-3 col-sm-2 col-md-2 control-label">Senha</label>
                                        <div class="col-xs-8 col-sm-5 col-md-6">
                                            <input type="password" class="form-control" name="senha" maxlength="8" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="radioPerfil" class="col-xs-3 col-sm-2 col-md-2 control-label">Perfil</label>
                                        <div class="col-xs-8 col-sm-5 col-md-6">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionProfessor" required value="Professor"> Professor
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionCoordenador" required value="Coordenador"> Coordenador
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionSecretaria" required value="Secretaria"> Secretária
                                            </label>

                                        </div>
                                    </div>
                                    
                                    <div class="col-md-offset-5">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                        <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br /><br />
<?php include_once '../inc/rodape.php'; ?>
    </body>
</html>


?>