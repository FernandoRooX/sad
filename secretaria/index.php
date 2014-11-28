<!doctype html>
<html lang="pt-BR">
    <?php
    session_start();
    $variavel = 'Secretaria';
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Secretária</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">


        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<?php        require_once '../topo.php'; ?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-home"></span> Home</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="well">
                                    <h1>Bem Vindo(a) Secretária(o)</h1>

                                    <br/><?php echo $_SESSION['login'];?>
                                    <br/><?php echo$_SESSION['perfilUsuario'] ;?>
                                    <br/><?php echo$_SESSION['idPESSOA']  ;?>
                                    <br/><?php echo$_SESSION['logado'] ;?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../inc/rodape.php'; ?>
    </body>
</html>