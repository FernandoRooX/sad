<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<?php
session_start();
$variavel = "coordenador";
require_once '../classes/validaAcesso.php';
?>
<html>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Excluir Disciplina</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/style.css">

	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
    </head>
    <body>
        <?php require_once '../topo.php'; ?>
        <?php require_once '../inc/rodape.php'; ?>
    </body>
</html>
