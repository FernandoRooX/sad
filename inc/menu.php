<?php
$perfil = $_SESSION['perfilUsuario'];

if ($perfil == 'Secretaria') {
    $pagina = '../secretaria/index.php';
} elseif ($perfil == 'Coordenador') {
    $pagina = '../coordenador/index.php';
} elseif ($perfil == 'Professor') {
    $pagina = '../professor/index.php';
}
?>


<div id="menu">
    <ul id="menu_lateral">
        <li><a <?php echo"href='$pagina'"?>>Página Inicial</a></li>
        <li><a href="?pag=servicos">Serviços</a>
            <ul>
                <li>testes_1</li>
                <li>testes_2</li>
                <li>testes_3</li>
                <li>testes_4</li>
            </ul></li>
        <li><a href="./pag/cadastroaluno.php">Secretária</a></li>
        <li>Professor</a></li>
        <li>Coordenador</a>
            <ul>
                <li>1_testes_1</li>
            </ul>
            <ul>
                <li><a href="./pag/cadastrodecurso.php">Cadastrar Curso</li>
            </ul>
        </li>
    </ul>
</div>
