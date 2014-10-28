<?php

#dados para conectar com o banco

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sad5';

#Executa a conexão com o mysql
$lig = mysql_connect($servidor, $usuario, $senha) or die('Não possível fazer a conexão: '.mysql_error());

#Seleciona o banco de dados que deseja utilizar
$select = mysql_select_db($banco);

?>
