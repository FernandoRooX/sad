<?php
require_once '../conecta.php';
require_once '../classes/Seguranca.class.php';
require_once '../classes/Validacao.class.php';
require_once '../classes/JS.class.php';

if ($_REQUEST["acao"] == "adicionar") {
    
 $nome = $_REQUEST['nome'] ;
 $cpf  = str_replace(".", "", $_REQUEST['cpf']);
 $cpf  = str_replace("-", "", $cpf);
 $telefone = $_REQUEST['telefone'];
 $sexo = $_REQUEST['sexo'];
 $nascimento = $_REQUEST['nascimento'];
 $email = $_REQUEST['email'];
 
 if (!Validacao::validarCPF($cpf))
 {
	JS::exibeMSG(Seguranca::tratarVarAjaxBasico("CPF inválido!"));
	JS::voltar();
 }
 
 $verificarDuplicidade = mysql_query("SELECT cpf FROM pessoa WHERE cpf = " . $cpf);
 if (mysql_num_rows($verificarDuplicidade) > 0)
 {
	JS::exibeMSG(Seguranca::tratarVarAjaxBasico("Já existe um usuário cadastrado com o CPF informado!"));
	JS::voltar();
 }

 
    $sql = mysql_query("INSERT INTO pessoa (nome, cpf, dt_nascimento, telefone, email, sexo) 
            VALUES('$nome', '$cpf', '$nascimento', '$telefone', '$email', '$sexo')");

    $select = mysql_query("SELECT idPESSOA FROM pessoa ORDER BY idPESSOA DESC")or die(mysql_error());
    $primeiro = mysql_fetch_row($select)or die(mysql_error());
    $primeiro = $primeiro[0];
    
    $inserirTblProfessor = mysql_query("INSERT INTO professor (PESSOA_idPESSOA) VALUES ('$primeiro')")or die(mysql_error());
    
    
    if (!($sql && $inserirTblProfessor) ) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroProfessor.php");
    }
}
?>