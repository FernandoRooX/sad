<?php
session_start();

require_once './classes/conexao.php';
require_once './classes/login.php';

if (isset($_POST['Entrar'])):

    $login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
    $senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);
    $f = new Login;
    $f->setLogin($login);
    $f->setSenha($senha);

    if ($f->logar()):
        
        header('Location: logado.php');
    else:
        $erro = '<div class="alert alert-warning alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>				
                    <strong>Usuário ou senha incorreto!</strong>
                </div>';
    endif;
endif;

?>

<!DOCTYPE html>
<html lang="pt-br">
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Sistema de Apoio a Dependência">
    <script type="text/javascript">
        //adiciona mascara a telefone 
        function formatar(mascara, documento) {
            var i = documento.value.length;
            var saida = mascara.substring(0, 1);
            var texto = mascara.substring(i)
            if (texto.substring(0, 1) != saida) {
                documento.value += texto.substring(0, 1);
            }
        }
    </script>

</head>

<!-- Bootstrap core CSS -->
<link href="./css/bootstrap.css" rel="stylesheet">
<link href="./css/style.css" rel="stylesheet">

<!--[if lt IE 9]>
 <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
 <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container container-fluid">
                <div class="navbar-header">
                    <img src="./img/Sad_logo.png" class="navbar-brand" alt="SAD" />
                </div>
            </div>
        </div>
    </nav>

    <div class="wrapper" role="main">
        <div class="container container-fluid">
            <div class="col-md-4 col-md-offset-4 col-sm-8 col-sm-offset-2">
<?php echo isset($erro) ? $erro : ''; ?>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Login</div>
                        <div style="float:right; font-size:80%; position:relative; top:-10px;"><a href="alter.php">Esqueceu a senha?</a></div>
                    </div>

                    <div style="padding-top:30px;" class="panel-body">
                        <div style="display:none;" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <!--<form method="post" action="" class="form signin" role="form"> -->
                        <form method="post" action="" class="form-horizontal" role="form">
                            <div style="margin-bottom:25px;" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <!--<input class="form-control" type="login" id="input_login" placeholder="CPF" name="login" maxlength="14" onkeypress="formatar('###.###.###-##', this);" required="" /> -->
                                <input class="form-control" type="login" id="input_login" placeholder="LOGIN" name="login"  maxlength="30"  required autofocus/>
                            </div>

                            <div style="margin-bottom:25px;" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <!-- <input class="form-control" type="password" id="input_senha" name="senha" maxlength="11" placeholder="SENHA" required="">-->
                                <input class="form-control" type="password" id="input_senha"  name="senha" maxlength="11" placeholder="SENHA" required="">
                            </div>

                            <div style="margin-top:10px" class="form-group">
                                <div class="col-sm-12 controls">
                                    <label class="btn btn-primary">
                                        <input type="checkbox" id="login-remember" name="remember" value="1"> Lembrar-me</input>
                                    </label>
                                    <button class="btn btn-primary btn-success" name="Entrar" type="submit" value="Entrar">Login</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="copyright">
			<div class="container container-fluid">
			  <div class="row">
				<div class="col-md-12">
				  <p>&copy; Todos os direitos reservados</p>
				</div>
			  </div>
			</div>
		</div>
	<footer class="navbar navbar-inverse navbar-fixed-bottom">
		<div class="copyright">
			<div class="container container-fluid">
			  <div class="row">
				<div class="col-md-12">
				  <p>&copy; Todos os direitos reservados</p>
				</div>
			  </div>
			</div>
		</div>
	</footer>
	
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

	<script>
		$('#pesquisa').popover({
			container: 'body',
			html: true,
			template: '<div class="popover"><div class="arrow"></div><div class="popover-content"></div></div>',
			content: '<div class="input-group"><input type="text" class="form-control" /><span class="input-group-btn"><button class="btn btn-danger" type="button"><span class="glyphicon glyphicon-remove"></span></button></span></div><span class="glyphicon glyphicon-remove-sign" style="display: none;"></span>',
			placement: 'right',
		});
	</script>
</body>
</html>