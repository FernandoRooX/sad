<?php
    session_start();
    $logado = $_SESSION['logado'];
    $perfil = $_SESSION['perfilUsuario'];
    
    if($logado != true){
        echo"<script>alert('Você não está logado.')</script>";
        echo"<script>location.href='../index.php'</script>";
    }
    
    if($perfil == 'Professor' && ($variavel == "secretaria" || $variavel == "coordenador")){
        echo"<script>alert('Você não tem permissão para acessar este conteúdo. Acesso negado.')</script>";
        echo"<script>location.href='../professor/index.php'</script>";
    }
?>