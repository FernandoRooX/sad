<?php
require_once '../conecta.php';

if ($_REQUEST["acao"] == "adicionar"){ 

 $nome = $_REQUEST['disciplina'] ;
 $situacao  = $_REQUEST['situacao'];
 $ch = $_REQUEST['ch'];


 
    $sql = mysql_query("INSERT INTO disciplina (nome, situacao, carga_horaria) 
            VALUES('$nome', '$situacao', '$ch')");

    if (!($sql)) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroDisciplina.php");
    }
}
?>
