<?php

require_once '../conecta.php';


if ($_REQUEST["acao"] == "adicionar") {

    
    $codAluno = $_REQUEST['codAluno'];
    $codTurma = $_REQUEST['codTurma'];

    $sql = "INSERT INTO turma_has_aluno (TURMA_cod, ALUNO_cod) 
            VALUES('$codTurma','$codAluno')";


    $result = mysql_query($sql)or die(mysql_error());

    if (!$result) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=vincularAlunoTurma.php");
    }
}
?>