<!DOCTYPE html>

<?php
$variavel = "coordenador";
$id = $_GET['idAluno'];
session_start();

require_once '../classes/validaAcesso.php';

require_once '../conecta.php';
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
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Edição de Aluno:</h3>
                        </div>
                        <tbody class="h5">
                        <?php
                        $rs = mysql_query("select aluno.*, pessoa.* FROM aluno inner join pessoa on $id = pessoa.idPESSOA");
                        while ($obj = mysql_fetch_object($rs) )
                        {
                        ?>
                            <tr>
                                <td><?php echo $obj->nome; ?></td>
                                <td><?php echo $obj->nome; ?></td>
                                <td><?php echo $obj->cpf; ?></td>
                                <td><?php echo $obj->dt_nascimento; ?></td>
                                <td><?php echo $obj->email; ?></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                        <div class="col-md-offset-4">
                       
                            <?php
                        $rs = mysql_query("select aluno.*, pessoa.* FROM aluno inner join pessoa on $id = pessoa.idPESSOA");
                        $obj = mysql_fetch_object($rs);
                        ?>
                            <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
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
                        
                        </tbody>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-success">Editar</button>
                            <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
                        </div>
                    </div>
                </div>
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