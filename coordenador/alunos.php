<!DOCTYPE html>
<html lang="pt-br">
    <?php
    session_start();
    $variavel = "coordenador";
    require_once '../classes/validaAcesso.php';
    ?>
    <head>
<?php require_once '../inc/head.php'; ?>
        <title>Alunos</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>
    <body>
<?php require_once '../topo.php'; ?>

        <div class="wrapper" role="main">
            <div class="container-fluid container">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Alunos Cadastrados</h3>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                <a href="../coordenador/cadastroAluno.php"><button type="button" class="btn btn-success">Novo Aluno</button></a>
                                <a href="vincularAlunoTurma.php"><button type="button" class="btn btn-success">Vincular Turma</button></a>
                            </div>
                        </div>

                        <hr>

                        <div class="row">
                            <div class="col-lg-4">
                                <input type="search" id="container-search" class="form-control" placeholder="Search...">
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-striped bordered">
                                <thead class="h4">
                                    <tr>
                                        <th id="name">
                                            <span id="nameHeader" style="cursor:pointer;">Nome</span>
                                            <span id="nameCaret" class="caret" style="display:none;"></span>
                                            <span id="namePesquisarIcon" class="glyphicon glyphicon-search"></span>
                                <div id="namePesquisarDiv" class="hide">
                                    <div class="input-group">
                                        <input type="text" id="nameInput" class="form-control" />
                                        <span class="input-group-btn">
                                            <button id="nameApagarPesquisa" class="btn btn-default" type="button" onclick="removerFiltro('nome')"><span class="glyphicon glyphicon-remove"></span></button>
                                        </span>
                                    </div>
                                </div>
                                <span id="nameApagarPesquisaIcon" class="glyphicon glyphicon-remove-sign" style="display:none;"></span>
                                </th>
                                <th>Ação</th>
                                </tr>
                                </thead>
                                <tbody class="h5">
                                    <?php
                                    $rs = mysql_query("select aluno.*, pessoa.* FROM aluno inner join pessoa on aluno.PESSOA_idPESSOA = pessoa.idPESSOA ORDER BY nome");
                                    while ($obj = mysql_fetch_object($rs)){
                                                 ?>


                                               <td><?php echo("<a href='perfilAluno.php?idAluno=" . $obj->PESSOA_idPESSOA . "' > " . $obj->nome . " - " . $obj->matricula . " - " . $obj->cpf . " </a>");
                                    ?></td>
                                                    <!--<td><a onclick="location.href='editarAluno.php?idAluno'" /><button type="button" value="Editar" class="btn btn-warning btn-xs">Editar</button> -->
                                                    <td>
													
														<script>
														function excluir(id)
														{
															document.getElementById('id').value = id;
														}
														</script>
													
														<input type="button" value="Editar" class="btn btn-warning btn-xs" onclick="location.href='editarAluno.php?id=<?php echo $obj->PESSOA_idPESSOA; ?>'" />
														<input type="button" value="Excluir" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete" onclick="excluir('<?php echo $obj->PESSOA_idPESSOA; ?>')" />
													</td>
                                            </tr>
                                    <?php }?>   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
			<div class="modal-dialog modal-sm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
					</div>
					<div class="modal-body">
						<p>Tem certeza que deseja remover esse aluno?</p>			
					</div>
					<div class="modal-footer">
						<form action="excluirAluno.php" method="post">
							<input type="hidden" name="id" id="id">
							<button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
							<button type="submit" class="btn btn-danger">Sim</button>
						</form>
					</div>
				</div>
			</div>
		</div>

                                                     <!--<td><a onclick="location.href='editarAluno.php?idAluno'" /><button type="button" value="Editar" class="btn btn-warning btn-xs">Editar</button> -->
                                                     <!-- <td><input type="button" value="Editar"class="btn btn-warning btn-xs" onclick="location.href='editarAluno.php?idAluno'" </a>
                                                      <a href="excluirAluno.php"/><button  type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modal-delete">Excluir</button></td>
                                            <div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="modal-delete" aria-hidden="true">
                                                <div class="modal-dialog modal-sm">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Sair</span></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>Tem certeza que deseja remover esse aluno?</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Não</button>
                                                            <button type="button" class="btn btn-danger">Sim</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </tr>
                                    <!-- linha de codigo fechamento em php -->  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
        <?php require_once '../inc/rodape.php'; ?>
    </body>
</html>