<!doctype html>

<html lang="pt-BR">
    <?php
    $variavel = "professor";
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Apresentação</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<?php        require_once '../topo.php';?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Home</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <div class="well">
                                    <h1>Bem Vindo(a) Professor(a)</h1>
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