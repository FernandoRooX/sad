<!Doctype>
<html>
    <head>
        <?php require_once '../inc/head.php'; ?>
        <title>Sad - Sistema de Apoio a Dependencia</title>
        
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<?php

#dados para conectar com o banco

$servidor = 'localhost';
$usuario = 'root';
$senhaa = '1010';
$banco = 'bd_sad';

#Executa a conexão com o mysql
$lig = mysql_connect($servidor, $usuario, $senhaa) or die('Não possível fazer a conexão: '.mysql_error());

#Seleciona o banco de dados que deseja utilizar
$select = @mysql_select_db($banco);

    if(@$_REQUEST['acao'] == "adicionando")
    {
        $sql = "INSERT INTO turma (nome, data, hora, disponibilidade, tipos_dep, componentes) 
            VALUES(";
        $sql .= "'".$_REQUEST['nome']."',";
        $sql .= "'".$_REQUEST['date']."',";
        $sql .= "'".$_REQUEST['hora']."',";
        $sql .= "'".$_REQUEST['selectDisponibilidade']."',";
        $sql .= "'".$_REQUEST['selectDependencia']."',";
        $sql .= "'".$_REQUEST['selectHabilitado']."'";
        $sql .= ")";
        
        $result = mysql_query($sql);
        
        if(!$result)
        {
            die('Erro: '.mysql_error());
        }
        else
        {
           
             echo'<h2>Cadastrado com sucesso!<hr></h2>';
             
             mysql_close();
             
             header("refresh: 3; url=cadastroTurma.php");
        }   
    }
?>
        <?php require_once '..../../../inc/rodape.php'; ?>
    </body>
</html>