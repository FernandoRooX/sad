<?php

require_once '../conecta.php';


if ($_REQUEST["acao"] == "adicionar") {

    
    $codDisciplina = $_REQUEST['codDisciplina'];
    $codProfessor = $_REQUEST['codProfessor'];

    $sql = "INSERT INTO professor_has_disciplina (PROFESSOR_cod, DISCIPLINA_cod) 
            VALUES('$codProfessor', '$codDisciplina')";


    $result = mysql_query($sql);

    if (!$result) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=vincularDisciplinaProfessor.php");
    }
}
?>