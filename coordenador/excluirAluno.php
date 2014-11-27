<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html lang="pt-br">
    <?php 
    session_start(); ?>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Excluir Aluno</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

        
        </head>
    <body>
        <?php require_once '../inc/topo.php'; ?>
		<?php 
        require_once '../conecta.php';
	
	require_once '../classes/JS.class.php';
        
		mysql_query("DELETE FROM aluno WHERE PESSOA_idPESSOA = " . $_GET['id']);
	mysql_query("DELETE FROM pessoa WHERE cod = " . $_GET['id']);
JS::exibeMSG("Exclusão efetuada com sucesso!");	
JS::redirecionaURL("alunos.php"); ?>
        <?php require_once '../inc/rodape.php';?>
    </body>
</html>
