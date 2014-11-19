<!DOCTYPE html>

<?php
$id = $_GET['idAluno'];
session_start();
require_once '../classes/validaAcesso.php';
$variavel = "coordenador";
?>
<html lang="pt-BR">
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Editar Aluno</title>

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
        $rs = mysql_query("select aluno.*, pessoa.* FROM aluno inner join pessoa on $id = pessoa.idPESSOA");
        if ($rs) {
            $row = mysql_fetch_array($rs);
        };
        {
            ?>
        <tr>
            <td><?php echo("<a href='perfilAluno.php?idAluno=" . $obj->PESSOA_idPESSOA . "' > " . $obj->nome . " - " . $obj->matricula . " - " . $obj->cpf . " </a>");
            ?></td>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Edição de Aluno:</h3>
                        </div>

                        <form method="post" action="banksaluno.php?acao=adicionar" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome completo" maxlength="50" id="inputName" value="<?php echo $obj->nome; ?>" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputCpf" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">CPF:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" name="cpf" id="inputCpf" placeholder="000.000.000-00" maxlength="14" onload="valida(this.form)" onkeypress="formatar('###.###.###-##', this);" required="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputMat" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Matrícula:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" name="matricula" placeholder="Matricula" id="inputMat" maxlength="11" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputNasc" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nascimento:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="date" name="nascimento" class="form-control" id="inputNac" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">E-mail:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" name="email" class="form-control" id="inputEmail" maxlength="50" placeholder="Digite seu e-mail">
                                        </div>
                                    </div>

                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success">Editar</button>
                                        <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
                                    </div>
                                </div>
                            </div>
<?php } ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br /> <br />
<?php include '../inc/rodape.php'; ?>
</body>
<script>
                                            var email = document.forms['radioSexo'].CAMPO_EMAIL, value;
                                            if (email.lenght < 5 || email.lenght > 128 || email.indexOf('@') == -1 || email.indexOf('.') == -1)
                                            {
                                                alert("O campo E-mail deve ser preenchido corretamente.");
                                            }
</script>
</html>