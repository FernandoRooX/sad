<?php

require_once '../conecta.php';


if ($_REQUEST["acao"] == "adicionar") {
    $idAluno = $_REQUEST['idAluno'];
    
    $idTurma = $_REQUEST['idTurma'];
    $nota1 = $_REQUEST['nota1'];
    $nota2 = $_REQUEST['nota2'];
    $nota_final = $_REQUEST['notafinal'];

//echo $idAluno." turma:". $idTurma. " nota1:".$nota1. " nota2:".$nota2. " nota final:".$nota_final;
    $sql = "UPDATE dependencia SET nota1='$nota1', nota2='$nota2',nota_final='$nota_final' "
            . "WHERE ALUNO_cod='$idAluno' AND TURMA_cod='$idTurma'";


    $result = mysql_query($sql)or die(mysql_error());

    if (!$result) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Notas cadastradas com sucesso!<hr></h2>';

        mysql_close();

       echo"<script> history.back(-1); </script>";
    }
}
?>