<?php
require_once '../conecta.php';

if ($_REQUEST["acao"] == "adicionar") {
    
 $nome = $_REQUEST['nome'] ;
 $cpf  = $_REQUEST['cpf'];
 $matricula = $_REQUEST['matricula'];
 $telefone = $_REQUEST['telefone'];
 $sexo = $_REQUEST['sexo'];
 $nascimento = $_REQUEST['nascimento'];
 $email = $_REQUEST['email'];

 
    $sql = mysql_query("INSERT INTO pessoa (nome, cpf, dt_nascimento, telefone, email, sexo) 
            VALUES('$nome', '$cpf', '$nascimento', '$telefone', '$email', '$sexo')");

    $select = mysql_query("SELECT idPESSOA FROM pessoa ORDER BY idPESSOA DESC")or die(mysql_error());
    $primeiro = mysql_fetch_row($select)or die(mysql_error());
    $primeiro = $primeiro[0];
    
    $inserirTblAluno = mysql_query("INSERT INTO aluno (matricula, PESSOA_idPESSOA) VALUES ('$matricula', '$primeiro')")or die(mysql_error());
    
    
    if (!($sql && $inserirTblAluno) ) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroAluno.php");
    }
}
?>