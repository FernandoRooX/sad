<?php
@session_start();

#dados para conectar com o banco

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'sad9';

#Executa a conexão com o mysql
$lig = mysql_connect($servidor, $usuario, $senha) or die('Não possível fazer a conexão: ' . mysql_error());

#Seleciona o banco de dados que deseja utilizar
$select = mysql_select_db($banco);


$logado = $_SESSION['logado'];
$perfil = $_SESSION['perfilUsuario'];

$idPessoa = $_SESSION['idPESSOA'];

$query = mysql_query("SELECT nome FROM pessoa WHERE idPESSOA = '$idPessoa'") or die(mysql_error());
$nome = mysql_result($query, 0) or die(mysql_error());

$_SESSION['perfil'] = $nome;

if ($logado != true) {
    echo"<script>alert('Você não está logado.')</script>";
    echo"<script>location.href='../index.php'</script>";
}

if ($perfil == 'Professor' && ($variavel == "secretaria" || $variavel == "coordenador")) {
    echo"<script>alert('Você não tem permissão para acessar este conteúdo. Acesso negado.')</script>";
    echo"<script>location.href='../professor/index.php'</script>";
}
if ($perfil == 'Coordenador' && ($variavel == "secretaria" || $variavel == "professor")) {
    echo"<script>alert('Você não tem permissão para acessar este conteúdo. Acesso negado.')</script>";
    echo"<script>location.href='../coordenador/index.php'</script>";
}
if (@$perfil == 'Secretaria' && (@$variavel == "Coordenador" || @$variavel == "Professor")) {
    echo"<script>alert('Você não tem permissão para acessar este conteúdo. Acesso negado.')</s  crip    t>";
    echo"<script>location.href='../secretaria/index.php'</script>";
}
?>
