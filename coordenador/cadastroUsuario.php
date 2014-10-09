<!doctype html>
<html lang="pt-BR">
    <?php session_start();
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Cadastro de Usuário</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="">{Logo}</a>
                </div>

                <div class="collapse navbar-collapse" id="navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href="../coordenador/index.php">Home</a></li>
					<li><a href="../coordenador/alunos.php">Alunos</a></li>
					<li><a href="../coordenador/turmas.php">Turmas</a></li>
					<li><a href="../coordenador/disciplinas.php">Disciplinas</a></li>
					<li><a href="../coordenador/usuarios.php">Usuários</a></li>
				</ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"><?php echo $_SESSION['perfil'] ?></span>
                                <span class="caret"></span></a>
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

        <div class="wrapper" roel="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Usuário</h3>
                        </div>

                        <form method="post" action="conecta.php?acao=cadastrar" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="inputName" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Nome</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" maxlength="50"  id="inputName" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputsenha" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Gerador de Senha</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" value="<?php echo $gerar = geraSenha(8, TRUE, FALSE); ?>"  name="senha" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputsenha" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Senha</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="password" class="form-control" value="pass"  name="senha" placeholder="Repita a senha aqui:" required="" autofocus="" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="radioPerfil" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Perfil</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionProfessor" required="" value="professor"> Professor
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionCoordenador" required="" value="coordenador"> Coordenador
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="radio" name="optionPerfil" id="optionSecretaria" required="" value="secretaria"> Secretária
                                            </label>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputCPF" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">CPF</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" name="cpf" placeholder="000.000.000-00" maxlength="14" onkeypress="formatar('###.###.###-##', this)">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputNasc" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data de Nascimento</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="date" name="date" class="form-control" id="inputNasc" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputPhone" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Telefone</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" name="tel" maxlength="12" placeholder="00-0000-0000" onkeypress="formatar('##-####-####', this);" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEndereco" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Endereco</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" id="inputEndereco" size="30" maxlength="50" placeholder="Digite endereco" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputComplemento" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Complemento</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" placeholder="Complemento endereco..." size="30" maxlength="20"  id="inputComplemento" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputCidade" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Cidade</label>
                                        <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                            <input type="text" class="form-control" size="30" maxlength="30" placeholder="Sua cidade" id="inputCidade" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="optionEstado" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Estado</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="selectEstado" id="selectEstado" class="form-control" required>
                                                <option value=""></option>
                                                <option value="AC">AC</option>
                                                <option value="AM">AM</option>
                                                <option value="AP">AP</option>
                                                <option value="BA">BA</option>
                                                <option value="CE">CE</option>
                                                <option value="ES">ES</option>
                                                <option value="MA">MA</option>
                                                <option value="RS">RS</option>
                                                <option value="DF">DF</option>
                                                <option value="SP">SP</option>
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br /><br />
        <?php include_once '../inc/rodape.php'; ?>
    </body>
</html>
<?php

function geraSenha($tamanho = 8, $maiusculas = true, $numeros = true, $simbolos = false) {

// Caracteres de cada tipo

    $lmin = 'abcdefghijklmnopqrstuvwxyz';

    $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

    $num = '1234567890';
    $simb = '!@#$%*-';

// Variáveis internas

    $retorno = '';
    $caracteres = '';

// Agrupamos todos os caracteres que poderão ser utilizados

    $caracteres .= $lmin;

    if ($maiusculas)
        $caracteres .= $lmai;

    if ($numeros)
        $caracteres .= $num;

    if ($simbolos)
        $caracteres .= $simb;


// Calculamos o total de caracteres possíveis
    $len = strlen($caracteres);


    for ($n = 1; $n <= $tamanho; $n++) {

// Criamos um número aleatório de 1 até $len para pegar um dos caracteres

        $rand = mt_rand(1, $len);

// Concatenamos um dos caracteres na variável $retorno

        $retorno .= $caracteres[$rand - 1];
    }

    return $retorno;
}

/**

 * Função para gerar senhas aleatórias

 * AGRADECIMENTNOS AO SITE DO THIAGO BELEM
 * http://blog.thiagobelem.net/gerando-senhas-aleatorias-com-php/

 * @author    Thiago Belem <contato@thiagobelem.net>

 *

 * @param integer $tamanho Tamanho da senha a ser gerada

 * @param boolean $maiusculas Se terá letras maiúsculas

 * @param boolean $numeros Se terá números

 * @param boolean $simbolos Se terá símbolos

 *
 * @return string A senha gerada
 */
?>