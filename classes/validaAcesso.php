<?php
include "../conecta.php";
session_start();
    
    $logado     = $_SESSION['logado'];
    $perfil     = $_SESSION['perfilUsuario'];
    
    $idPessoa   = $_SESSION['idPESSOA'];
 
    $nome       = mysql_query("SELECT nome FROM pessoa WHERE idPessoa = '$idPessoa'")or die(mysql_error());
    $nome       = mysql_result($nome, 0);
    
    $_SESSION['perfil'] = $nome; 
    
    if($logado != true){
        echo"<script>alert('Você não está logado.')</script>";
        echo"<script>location.href='../index.php'</script>";
    }
    
    if($perfil == 'Professor' && ($variavel == "secretaria" || $variavel == "coordenador")){
        echo"<script>alert('Você não tem permissão para acessar este conteúdo. Acesso negado.')</script>";
        echo"<script>location.href='../professor/index.php'</script>";
    }
    if($perfil == 'Coordenador' && ($variavel == "secretaria" || $variavel == "professor")){
        echo"<script>alert('Você não tem permissão para acessar este conteúdo. Acesso negado.')</script>";
        echo"<script>location.href='../coordenador/index.php'</script>";
    }
    if($perfil == 'Secretaria' && ($variavel == "coordenador" || $variavel == "professor")){
        echo"<script>alert('Você não tem permissão para acessar este conteúdo. Acesso negado.')</script>";
        echo"<script>location.href='../secretaria/index.php'</script>";
    }
    

?>
