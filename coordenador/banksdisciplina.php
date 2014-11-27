<?php
require_once '../conecta.php';
require_once '../classes/Seguranca.class.php';
require_once '../classes/Validacao.class.php';
require_once '../classes/JS.class.php';

if ($_REQUEST["acao"] == "adicionar"){ 

 $nome = $_REQUEST['disciplina'] ;
 $situacao  = $_REQUEST['situacao'];
 $ch = $_REQUEST['ch'];

 $verificarDuplicidade = mysql_query("SELECT nome FROM disciplina WHERE nome = '" . $nome . "'");
 if (mysql_num_rows($verificarDuplicidade) > 0)
 {
	JS::exibeMSG(Seguranca::tratarVarAjaxBasico("Já existe uma disciplina cadastrada com o nome informado!"));
	JS::voltar();
 }
 
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
