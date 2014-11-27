<!DOCTYPE html>
<html lang="pt-BR">
	
	<?php session_start(); 
        $variavel = "Professor";
        require_once '../classes/validaAcesso.php';
        ?>

	<head>
		<?php include_once '../inc/head.php'; ?>
		<title>Emitir Relatório</title>
		<link rel="stylesheet" href="../css/bootstrap.css">
		<link rel="stylesheet" href="../css/style.css">

		<!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
<body>
	<?php require_once '../topo.php' ?>
	<div class="wrapper" role="main">
		<div class="container container-fluid">
			<div class="row">
				<div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="page-header">
						<h3><span class="glyphicon glyphicon-list-alt"></span> Relatório</h3>
					</div>

					<div class="table-responsive">
						<table class="table table-striped bordered">
							<thead class="h4">
								<tr>
									<th>Relatório</th>
									<th></th>
								</tr>
							</thead>
							<tbody class="h5">
								<tr>
									<td>Teste</td>
									<td><button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-eye-open"></span> Visualizar</button> <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-print"></span> Imprimir</button> <button type="button" class="btn btn-default btn-xs"><span class="glyphicon glyphicon-save"></span> Download</button></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include_once '../inc/rodape.php' ?>
</body>
</html>