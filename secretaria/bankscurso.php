<?php
#banco de dados para tabela curso
#dados para conectar com o banco

$servidor = 'localhost';
$usuario = 'root';
$senhaa = '';
$banco = 'sad';


#Executa a conexão com o mysql
$lig = mysql_connect($servidor, $usuario, $senhaa) or die('Não possível fazer a conexão: ' . mysql_error());

#Seleciona o banco de dados que deseja utilizar
$select = @mysql_select_db($banco);

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