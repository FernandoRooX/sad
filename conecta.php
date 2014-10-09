<?php

#dados para conectar com o banco

$servidor = 'localhost';
$usuario = 'root';
$senhaa = '';
$banco = 'sad';

#Executa a conexão com o mysql
$lig = mysql_connect($servidor, $usuario, $senhaa) or die('Não possível fazer a conexão: '.mysql_error());

#Seleciona o banco de dados que deseja utilizar
$select = mysql_select_db($banco);

    if($_REQUEST["acao"] == "cadastrar")
    {
        $sql = "INSERT INTO perfil (nome, tipo, cpf, senha, entrada) VALUES(";
        $sql .= "'".$_REQUEST["nome"]."',";
        $sql .= "'".$_REQUEST["tipo"]."',";
        $sql .= "'".$_REQUEST["cpf"]."',";
        $sql .= "'".md5($_REQUEST["senha"])."',";
        $sql .= "'".$_REQUEST["data"]."'";
        $sql .= ")";
        
        $result = mysql_query($sql);
        
        if(!$result)
        {
            die('Erro: '.mysql_error());
        }
        else
        {
            echo '<h2>Cadastrado com sucesso!<hr></h2>
                <a href="javascript:history.back(1)">Voltar</a>';
        }   
    }
?>
