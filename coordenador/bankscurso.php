<?php
require_once '../conecta.php';


if ($_REQUEST["acao"] == "adicionar") {
    
$nome = $_REQUEST['nome'] ;
 $orientador = $_REQUEST['orientador'];
 $selectTipo = $_REQUEST['selectTipo'];

    $sql = "INSERT INTO curso (nome, orientador, modalidade) 
            VALUES('$nome', '$orientador', '$selectTipo');";

    
    $result = mysql_query($sql);

    if (!$result) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroCurso.php");
    }
}
?>