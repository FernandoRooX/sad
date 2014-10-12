<?php
require_once '../conecta.php';

if ($_REQUEST["acao"] == "adicionar") {
    
 $pessoa = $_REQUEST['selectPessoa'] ;
 $login  = $_REQUEST['login'];
 $senha = $_REQUEST['senha'];
 $perfil = $_REQUEST['optionPerfil'];

    $sql = "INSERT INTO usuario (login, senha, perfil, PESSOA_idPESSOA) 
            VALUES('$login', '$senha', '$perfil', '$pessoa');";

    
    
    $result = mysql_query($sql);

    if (!$result) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroUsuario.php");
    }
}
?>