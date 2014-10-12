
<!doctype html>
<html lang="pt-BR">
    <?php
    $variavel = "coordenador";
    session_start();
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Cadastro de Usuário</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">{Logo}</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="../coordenador/index.php">Home</a></li>
                        <li><a href="../coordenador/alunos.php">Alunos</a></li>
                        <li><a href="../coordenador/turmas.php">Turmas</a></li>
                        <li><a href="../coordenador/disciplinas.php">Disciplinas</a></li>
                        <li><a href="../coordenador/usuarios.php">Usuários</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"><?php echo $nome; ?></span>
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Editar Perfil</a></li>
                                <li class="divider"></li>
                                <li><a href="../logado.php?logout=acessar"><span class="glyphicon glyphicon-log-out"> Sair</span></a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

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
                                        <label for="optionEstado" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Pessoa</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectPessoa" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione</option>
                                              <?php 
                                              $rs = mysql_query("SELECT idPESSOA, nome, cpf FROM pessoa ORDER BY nome");
                                              while ($obj = mysql_fetch_object($rs)) {
                                            echo("<option value='" . $obj->idPESSOA . "' > " . $obj->nome . "-". $obj->cpf." </option>");
                                              }?>
                                               
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputLogin" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Login</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" name="login" placeholder="Digite o login a ser utilizado" maxlength="50"  id="inputLogin" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputsenha" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Senha</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="password" class="form-control" value="pass"  name="senha" placeholder="Repita a senha aqui:" required="" autofocus="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="radioPerfil" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Perfil</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionProfessor" required="" value="Professor"> Professor
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionCoordenador" required="" value="Coordenador"> Coordenador
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionSecretaria" required="" value="Secretaria"> Secretária
                                            </label>

                                        </div>
                                    </div>
                                    
                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
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