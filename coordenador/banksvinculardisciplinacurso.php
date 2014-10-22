<?php

require_once '../conecta.php';


if ($_REQUEST["acao"] == "adicionar") {

    
    $codDisciplina = $_REQUEST['codDisciplina'];
    $codCurso = $_REQUEST['codCurso'];

    $sql = "INSERT INTO curso_disciplina (CURSO_cod, DISCIPLINA_cod) 
            VALUES('$codCurso', '$codDisciplina')";


    $result = mysql_query($sql);

    if (!$result) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=vincularDisciplinaCurso.php");
    }
}
?>