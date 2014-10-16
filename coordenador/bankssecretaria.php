<?php
require_once '../conecta.php';

if ($_REQUEST["acao"] == "adicionar") {
    
 $nome = $_REQUEST['nome'] ;
 $cpf  = $_REQUEST['cpf'];
 $telefone = $_REQUEST['telefone'];
 $sexo = $_REQUEST['sexo'];
 $nascimento = $_REQUEST['nascimento'];
 $email = $_REQUEST['email'];

 
    $sql = mysql_query("INSERT INTO pessoa (nome, cpf, dt_nascimento, telefone, email, sexo) 
            VALUES('$nome', '$cpf', '$nascimento', '$telefone', '$email', '$sexo')");

    
    if (!($sql) ) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroSecretaria.php");
    }
}
?>