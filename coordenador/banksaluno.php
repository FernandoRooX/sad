<?php

require_once '../conecta.php';

if ($_REQUEST["acao"] == "adicionar") {

<<<<<<< HEAD
    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $matricula = $_REQUEST['matricula'];
    $telefone = $_REQUEST['telefone'];
    $sexo = $_REQUEST['sexo'];
    $nascimento = $_REQUEST['nascimento'];
    $email = $_REQUEST['email'];

        $sql = mysql_query("INSERT INTO pessoa (nome, cpf, dt_nascimento, telefone, email, sexo) 
            VALUES('$nome', '$cpf', '$nascimento', '$telefone', '$email', '$sexo')");

        $select = mysql_query("SELECT idPESSOA FROM pessoa ORDER BY idPESSOA DESC") or die(mysql_error());
        $primeiro = mysql_fetch_row($select) or die(mysql_error());
        $primeiro = $primeiro[0];

        $inserirTblAluno = mysql_query("INSERT INTO aluno (matricula, PESSOA_idPESSOA) VALUES ('$matricula', '$primeiro')") or die(mysql_error());

    
        if (!($sql && $inserirTblAluno)) {
            die(' Ja existe Aluno cadastrado! ' . mysql_error());
            mysql_close();
        } else{
            echo '<h2>Cadastrado com sucesso!<hr></h2>';
=======

    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $matricula = $_POST['matricula'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $nascimento = $_POST['nascimento'];
    $email = $_POST['email'];

    $sql = mysql_query("INSERT INTO pessoa (nome, cpf, dt_nascimento, telefone, email, sexo) 
            VALUES('$nome', '$cpf', '$nascimento', '$telefone', '$email', '$sexo')");

    if (!($sql)) {
        die('Erro: ' . mysql_error());
    } else {
        $select = mysql_query("SELECT idPESSOA FROM pessoa where cpf = '$cpf'")or die(mysql_error());
        $primeiro = mysql_fetch_row($select)or die(mysql_error());
        $primeiro = $primeiro[0];
        $inserirTblAluno = mysql_query("INSERT INTO aluno (matricula, PESSOA_idPESSOA) VALUES ('$matricula', '$primeiro')")or die(mysql_error());
    }

    if (!($inserirTblAluno)) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';
>>>>>>> 41c89ff57a1e255f6d5c8307caaf5d59d970ab8d

            mysql_close();

            header("refresh: 3; url=cadastroAluno.php");
        }
    }
<<<<<<< HEAD

=======
} else if ($_REQUEST["acao"] == "atualizar") {

    $idPessoa = $_POST['idPessoa'];
    $nome = $_REQUEST['nome'];
    $cpf = $_REQUEST['cpf'];
    $matricula = $_REQUEST['matricula'];
    $telefone = $_REQUEST['telefone'];
    $sexo = $_REQUEST['sexo'];
    $nascimento = $_REQUEST['nascimento'];
    $email = $_REQUEST['email'];

    $sql = mysql_query("UPDATE pessoa SET nome='$nome', cpf='$cpf', dt_nascimento='$nascimento', telefone='$telefone', email='$email', sexo='$sexo' WHERE idPESSOA = '$idPessoa'");

    if (!($sql)) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        if (!($sql)) {
            die('Erro: ' . mysql_error());
            mysql_close();
        } else {
            $inserirTblAluno = mysql_query("UPDATE aluno SET matricula='$matricula' WHERE PESSOA_idPESSOA = '$idPessoa'")or die(mysql_error());
        }
        echo '<h2>Atualizado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=alunos.php");
    }
} else if ($_REQUEST["acao"] == "excluir") {

    $idPessoa = $_REQUEST["idPessoa"];

    $selectAluno = mysql_query("SELECT cod FROM aluno where PESSOA_idPESSOA = '$idPessoa'")or die(mysql_error());
    $idAluno = mysql_fetch_row($selectAluno)or die(mysql_error());
   
    $idAluno = $idAluno[0];

    $sqlDependencia = mysql_query("DELETE FROM dependencia WHERE ALUNO_cod = '$idAluno'");
    
    if (!($sqlDependencia)) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        $sqlAluno = mysql_query("DELETE FROM aluno WHERE PESSOA_idPESSOA = '$idPessoa'");
        if (!($sqlAluno)) {
            die('Erro: ' . mysql_error());
            mysql_close();
        } else {
            $sqlPessoa = mysql_query("DELETE FROM pessoa WHERE idPESSOA = '$idPessoa'");
            if (!($sqlPessoa)) {
                die('Erro: ' . mysql_error());
                mysql_close();
            } else {
                echo '<h2>Exclu&iacute;do com sucesso!<hr></h2>';

                mysql_close();
                header("refresh: 3; url=alunos.php");
            }
        }
    }
}
>>>>>>> 41c89ff57a1e255f6d5c8307caaf5d59d970ab8d
?>