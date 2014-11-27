<?php

require_once '../conecta.php';
require_once '../classes/Validacao.class.php';

if ($_REQUEST["acao"] == "adicionar") {

    $nome = $_REQUEST['nome'];
    $cpf = str_replace(".", "", $_REQUEST['cpf']);
    $cpf = str_replace("-", "", $cpf);
    $matricula = $_REQUEST['matricula'];
    $telefone = $_REQUEST['telefone'];
    $sexo = $_REQUEST['sexo'];
    $nascimento = $_REQUEST['nascimento'];
    $email = $_REQUEST['email'];

    if (!Validacao::validarCPF($cpf)) {
        die('CPF invalido!');
    }

    $verificarDuplicidade = mysql_query("SELECT cpf FROM pessoa WHERE cpf = " . $cpf);
    if (mysql_num_rows($verificarDuplicidade) > 0) {
        die('Já; existe um aluno cadastrado com o CPF informado!');
    }

    $sql = mysql_query("INSERT INTO pessoa (nome, cpf, dt_nascimento, telefone, email, sexo) 
            VALUES('$nome', '$cpf', '$nascimento', '$telefone', '$email', '$sexo')");

    $select = mysql_query("SELECT idPESSOA FROM pessoa ORDER BY idPESSOA DESC") or die(mysql_error());
    $primeiro = mysql_fetch_row($select) or die(mysql_error());
    $primeiro = $primeiro[0];

    $inserirTblAluno = mysql_query("INSERT INTO aluno (matricula, PESSOA_idPESSOA) VALUES ('$matricula', '$primeiro')") or die(mysql_error()); {
        if (!($sql && $inserirTblAluno)) {
            die(' Ja existe Aluno cadastrado! ' . mysql_error());
            mysql_close();
             header("refresh: 3; url=cadastroAluno.php");
        } else {
            echo '<h2>Cadastrado com sucesso!<hr></h2>';

            mysql_close();

            header("refresh: 3; url=cadastroAluno.php");
        }
    }
}
?>