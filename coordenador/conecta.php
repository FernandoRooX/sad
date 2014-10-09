<?php

#dados para conectar com o banco

$servidor = 'localhost';
$usuario = 'root';
$senhaa = '1010';
$banco = 'bd_sad';

#Executa a conexão com o mysql
$lig = mysql_connect($servidor, $usuario, $senhaa) or die('Não possível fazer a conexão: '.mysql_error());

#Seleciona o banco de dados que deseja utilizar
$select = mysql_select_db($banco);

    if($_REQUEST["acao"] == "cadastrar")
    {
        $sql = "INSERT INTO perfil (nome, tipo, cpf, senha, entrada) VALUES(";
        $sql .= "'".$_REQUEST["nome"]."',";
        $sql .= "'".$_REQUEST["optionPerfil"]."',";
        $sql .= "'".$_REQUEST['cpf']."',";
        $sql .= "'".md5($_REQUEST["pass"])."',";
        $sql .= "'".$_REQUEST['data']."'";
        $sql .= ")";
        
        $result = mysql_query($sql);
        
        if(!$result)
        {
            die('Erro: '.mysql_error());
        }
        else
        {
            echo '<h2>Cadastrado com sucesso!<hr></h2>';
                mysql_close();
                
                header("refresh: 3; url=cadastroUsuario.php");
        }   
    }
?>
