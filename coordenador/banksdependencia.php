
<?php
require_once '../conecta.php';

if ($_REQUEST["acao"] == "adicionar"){ 

 $disciplina = $_REQUEST['codDisciplina'] ;
 $aluno  = $_REQUEST['codAluno'];
 $turma = $_REQUEST['codTurma'];
 $dt_inicio = $_REQUEST['dt_inicio'];
 $dt_final = $_REQUEST['dt_final'];
 
 if($dt_inicio > $dt_final){
     echo '<h2>Data de início não pode ser maior que a data final.<hr></h2>';


        echo"<script> history.back(-1); </script>";
        exit();
 }

    $validacao = mysql_query("SELECT * FROM dependencia WHERE ALUNO_cod='$aluno'");
    
    while($obj = mysql_fetch_object($validacao)){
   
    if($obj->TURMA_cod == $turma){
        echo '<h2>Aluno já cadastrado nessa turma.<hr></h2>';

//        echo $obj->ALUNO_cod. " ". $obj->TURMA_cod;
        echo"<script> history.back(-1); </script>";
        exit();
    }
    }
 
    $sql = mysql_query("INSERT INTO dependencia (dt_inicio, dt_final, ALUNO_cod, TURMA_cod,DISCIPLINA_cod) 
            VALUES('$dt_inicio', '$dt_final', '$aluno', '$turma','$disciplina')");

    if (!($sql)) {
        die('Erro: ' . mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';

        mysql_close();

        header("refresh: 3; url=cadastroDependencia.php");
    }
}
?>