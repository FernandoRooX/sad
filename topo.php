<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand" alt="SAD">SAD</div>
        </div>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav">
                <?php
                if ($_SESSION['perfilUsuario'] == "Coordenador") {
                    echo" <li><a href='../coordenador/index.php'>Home</a></li>";
                    echo"<li><a href='../coordenador/alunos.php'>Alunos</a></li>";
                    echo"<li><a href='../coordenador/turmas.php'>Turmas</a></li>";
                    echo"<li><a href='../coordenador/cursos.php'>Cursos</a></li>";
                    echo"<li><a href='../coordenador/disciplinas.php'>Disciplinas</a></li>";
                    echo"<li><a href='../coordenador/usuarios.php'>Usuários</a></li>";
                    echo"<li><a href='../coordenador/cadastroDependencia.php'>Dependência</a></li>";
                } else if ($_SESSION['perfilUsuario'] == "Professor") {

                    echo"<li><a href='../professor/index.php'>Home</a></li>";
               //     echo"<li><a href='../professor/alunos.php'>Alunos</a></li>";
                    echo"<li><a href='../professor/turmas.php'>Turmas</a></li>";
                    echo "<li><a href='../professor/listaRelatorio.php'>Relatório</a></li>";
                } else if ($_SESSION['perfilUsuario'] == "Secretaria") {

                    echo" <li><a href='../secretaria/index.php'>Home</a></li>";
                    echo"<li><a href='../secretaria/alunos.php'>Alunos</a></li>";
                    echo"<li><a href='../secretaria/turmas.php'>Turmas</a></li>";
                    echo"<li><a href='../secretaria/cursos.php'>Cursos</a></li>";
                    echo"<li><a href='../secretaria/disciplinas.php'>Disciplinas</a></li>";
                }
                ?>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['perfil']; ?> <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><span class="glyphicon glyphicon-cog"></span> Editar Perfil</a></li>
                        <li class="divider"></li>
                        <li><a href="../logado.php?logout=acessar"><span class="glyphicon glyphicon-log-out"> Sair</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
