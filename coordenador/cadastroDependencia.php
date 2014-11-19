<!doctype html>
<html lang="pt-BR">
    <?php
    $variavel = 'coordenador';
    session_start(); 
    require_once '../classes/validaAcesso.php';?>
    <head>
        <?php include_once '../inc/head.php'; ?>
        <title>Cadastro de Aluno</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body><?php require_once'../topo.php';?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Dependência</h3>
                        </div>

                        <form method="post" action="banksdependencia.php?acao=adicionar" class="form-horizontal" role="form">
                            
                            
	
                            <div class="row">
                                <div class="col-md-8">
                                    

                                    <div class="form-group">
                                        <label for="optionCurso" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Disciplina:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="codDisciplina" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione a Disciplina</option>
                                                <?php
                                                $rs = mysql_query("SELECT cod, nome, situacao, carga_horaria FROM disciplina where situacao = 'Ativa' ORDER BY nome");
                                                while ($obj = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $obj->cod . "' > " . $obj->nome . " - " . $obj->situacao . " - " . $obj->carga_horaria . " </option>");
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="optionAluno" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Aluno:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="codAluno" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione o Aluno</option>
                                                <?php
                                                $rs = mysql_query("select aluno.*, pessoa.* FROM aluno inner join pessoa on aluno.PESSOA_idPESSOA = pessoa.idPESSOA ORDER BY nome");
                                                while ($obj = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $obj->cod . "' > " . $obj->nome . " - " . $obj->matricula . " - " . $obj->cpf . " </option>");
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="optionAluno" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Turma/Curso:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <select name="codTurma" id="idPessoa" class="form-control" required>
                                                <option value="">Selecione a Turma</option>
                                                <?php
                                                $rs = mysql_query("select turma.*, curso.* FROM turma inner join curso on turma.CURSO_cod = curso.cod ORDER BY nome");
                                                while ($obj = mysql_fetch_object($rs)) {
                                                    echo("<option value='" . $obj->turma_cod . "' > " . $obj->periodo . "/" . $obj->ano . " - " . $obj->turno . " - " . $obj->nome." - " . $obj->modalidade." </option>");
                                                }
                                                ?>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_inicio" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data de Início:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="date" name="dt_inicio" class="form-control" id="inputNac" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dt_final" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Data Final:</label>
                                        <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                            <input type="date" name="dt_final" class="form-control" id="inputNac" required="">
                                        </div>
                                    </div>
                                    
                                    


                                    <div class="pull-right">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                        <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <h2>Dados Inseridos</h2>
	<div style="margin-bottom:20px">
		<a href="#" onclick="getSelected()">GetSelected</a>
		<a href="#" onclick="getSelections()">GetSelections</a>
	</div>
	<table id="tt" class="easyui-datagrid" style="width:600px;height:250px"
			url="data/datagrid_data.json"
			title="Load Data" iconCls="icon-save" fitColumns="true">
		<thead>
			<tr>
				<th field="itemid" width="80">Item ID</th>
				<th field="productid" width="80">Product ID</th>
				<th field="listprice" width="80" align="right">List Price</th>
				<th field="unitcost" width="80" align="right">Unit Cost</th>
				<th field="attr1" width="150">Attribute</th>
				<th field="status" width="60" align="center">Stauts</th>
			</tr>
		</thead>
	</table>

                        
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../inc/rodape.php'; ?>
    </body>
</html>