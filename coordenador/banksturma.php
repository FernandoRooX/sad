<?php

require_once '../conecta.php';


if ($_REQUEST["acao"] == "adicionar") {

    $periodo = $_REQUEST['periodo'];
    $protocolo = $_REQUEST['protocolo'];
    $ano = $_REQUEST['ano'];
    $turno = $_REQUEST['turno'];
    $curso = $_REQUEST['curso'];
    $professor = $_REQUEST['codProfessor'];

    $sql = "INSERT INTO turma (periodo, protocolo, ano, turno, CURSO_cod, PROFESSOR_cod) 
            VALUES('$periodo', '$protocolo', '$ano', '$turno', '$curso', '$professor')";


    $result = mysql_query($sql);

    if (!$result) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroTurma.php");
    }
}else if ($_REQUEST["acao"] == "alterar"){
    
    $periodo = $_REQUEST['periodo'];
    $protocolo = $_REQUEST['protocolo'];
    $ano = $_REQUEST['ano'];
    $turno = $_REQUEST['turno'];
    $curso = $_REQUEST['curso'];
    $professor = $_REQUEST['codProfessor'];

    $sql = "UPDATE turma SET periodo = '$periodo', protocolo = '$protocolo', ano = '$ano', turno = '$turno', PROFESSOR_cod = '$professor' WHERE CURSO_cod = '$curso' ";


    $result = mysql_query($sql);

    if (!$result) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Alterado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroTurma.php");
    }
}
?>