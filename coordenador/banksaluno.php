<?php
require_once '../conecta.php';

if ($_REQUEST["acao"] == "adicionar") {

    $validacao = mysql_query("SELECT * FROM aluno WHERE matricula='$matricula'");
    
    while($obj = mysql_fetch_object($validacao)){
   
    if($obj->cod == $matricula){
        
        echo '
            <script>alert(<h2>Aluno já cadastrado!<hr></h2>)
            </script>';
    #$sql = mysql_query("SELECT * FROM `pessoa WHERE `matricula` = '".$_REQUEST['matricula']."'"); //monto a query
        #$q = mysql_query( $sql );
        #if( mysql_num_rows( $sql ) >= 1 ) //se retornar algum resultado
         #       echo 'alert(\"Já existe!)';
        #else
         #       echo 'Alert(\Não existe ainda!)';
//        echo $obj->ALUNO_cod. " ". $obj->TURMA_cod;
        echo"<script> history.back(-1); </script>";
        #exit();
    }
    }
 $nome = $_REQUEST['nome'] ;
 $cpf  = $_REQUEST['cpf'];
 $matricula = $_REQUEST['matricula'];
 $telefone = @$_REQUEST['telefone'];
 $sexo = @$_REQUEST['sexo'];
 $nascimento = $_REQUEST['nascimento'];
 $email = $_REQUEST['email'];
 
  $validacao = mysql_query("SELECT * FROM aluno WHERE matricula='$matricula'");
    
    while($obj = mysql_fetch_object($validacao)){
   
    if($obj->cod == $matricula){
        
        echo '
            <script>alert(<h2>Aluno já cadastrado!<hr></h2>)
            </script>';
    #$sql = mysql_query("SELECT * FROM `pessoa WHERE `matricula` = '".$_REQUEST['matricula']."'"); //monto a query
        #$q = mysql_query( $sql );
        #if( mysql_num_rows( $sql ) >= 1 ) //se retornar algum resultado
         #       echo 'alert(\"Já existe!)';
        #else
         #       echo 'Alert(\Não existe ainda!)';
//        echo $obj->ALUNO_cod. " ". $obj->TURMA_cod;
        echo"<script> history.back(-1); </script>";
        #exit();
    }
    }
    $sql = mysql_query("INSERT INTO pessoa (nome, cpf, dt_nascimento, telefone, email, sexo) 
            VALUES('$nome', '$cpf', '$nascimento', '$telefone', '$email', '$sexo')");
    
#$sql = mysql_query("SELECT * FROM `pessoa WHERE `nome` = '".$_REQUEST['nome']."'"); //monto a query
        #$q = mysql_query( $sql );
        #if( mysql_num_rows( $sql ) >= 1 ) //se retornar algum resultado
         #       echo 'alert(\"Já existe!)';
        #return 0;
    $select = mysql_query("SELECT idPESSOA FROM pessoa ORDER BY idPESSOA DESC")or die(mysql_error());
    $primeiro = mysql_fetch_row($select)or die(mysql_error());
    $primeiro = $primeiro[0];
    
    #$sql = mysql_query("SELECT * FROM `aluno WHERE `matricula` = '".$_REQUEST['matricula']."'"); //monto a query
        #$q = mysql_query( $sql );
      #  if( mysql_num_rows( $sql ) >= 1 ) //se retornar algum resultado
       #         echo 'alert(\"Já existe!)';
        #else 
         #   return 0;
    
     $validacao = mysql_query("SELECT * FROM aluno WHERE matricula='$matricula'");
    
    while($obj = mysql_fetch_object($validacao)){
   
    if($obj->cod == $matricula){
        
        echo '
            <script>alert(<h2>Aluno já cadastrado!<hr></h2>)
            </script>';
    #$sql = mysql_query("SELECT * FROM `pessoa WHERE `matricula` = '".$_REQUEST['matricula']."'"); //monto a query
        #$q = mysql_query( $sql );
        #if( mysql_num_rows( $sql ) >= 1 ) //se retornar algum resultado
         #       echo 'alert(\"Já existe!)';
        #else
         #       echo 'Alert(\Não existe ainda!)';
//        echo $obj->ALUNO_cod. " ". $obj->TURMA_cod;
        echo"<script> history.back(-1); </script>";
        #exit();
    }
    }
    $inserirTblAluno = mysql_query("INSERT INTO aluno (matricula, PESSOA_idPESSOA) VALUES ('$matricula', '$primeiro')")or die(mysql_error());
    
#if( mysql_num_rows( $sql ) >= 1 ) //se retornar algum resultado
 #               echo 'alert(\"Já existe!)';
    if (!($sql && $inserirTblAluno) ) {
        die('Erro: Impossível conectar!' .@mysql_error());
        mysql_close();
    } else {
        echo '<h2>Cadastrado com sucesso!<hr></h2>';
        mysql_close();

        header("refresh: 3; url=cadastroAluno.php");
    }
}
 
?>