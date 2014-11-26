<!doctype html>
<html lang="pt-BR">
    <?php
    $variavel = 'coordenador';
    session_start();
    require_once '../classes/validaAcesso.php';
    ?>
    <head> 
<?php require_once '../inc/head.php'; ?>
        <title>Cadastro de Aluno</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
<?php        require_once '../topo.php';?>
        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Aluno</h3>
                        </div>

                        <form method="post" action="banksaluno.php?acao=adicionar" class="form-horizontal" role="form">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="inputName" class="col-xs-3 col-sm-2 col-md-2 control-label">Nome:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <input type="text" class="form-control" name="nome" placeholder="Digite seu nome completo" maxlength="50" id="inputName" required>
                                        </div>
                                    </div>
                                    <div class="form-group has-error">
                                        <label for="inputCpf" class="col-xs-3 col-sm-2 col-md-2 control-label">CPF:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <input type="text" class="form-control" name="cpf" id="inputCpf" placeholder="000.000.000-00" maxlength="14" onkeypress="formatar('###.###.###-##', this);" required />
                                            <br>
                                            <div class="alert alert-warning" role="alert">CPF inválido!</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputMat" class="col-xs-3 col-sm-2 col-md-2 control-label">Matrícula:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <input type="text" class="form-control" name="matricula" placeholder="Matricula" id="inputMat" maxlength="11" required>
                                        </div>
                                    </div>

                                    <!--								<div class="form-group">
                                                                                                            <label for="curso" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Curso:</label>
                                                                                                            <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                                                                                <select name="curso" id="selectCurso" name="curso" class="form-control" required>
                                                                                                                            <option>Componente Curricular</option>
                                                                                                                            <option value="Programacao Estruturada">Programação Estruturada</option>
                                                                                                                            <option value="Programacao Orientada a Objeto">Programação Orientada a Objetos</option>
                                                                                                                            <option value="Java">Java</option>
                                                                                                                            <option value="Sistemas de Banco de Dados">Sistemas de Banco de Dados</option>
                                                                                                                            <option value="Programacao de Banco de Dados">Programação de Banco de Dados</option>
                                                                                                                            <option value="Redes de Computadores">Redes de Computadores</option>
                                                                                                                            <option value="Programacao Comercial">Programação Comercial</option>
                                                                                                                            <option value="Inteligencia Artificial">Inteligência Artificial</option>
                                                                                                                            <option value="Interface Homem-Maquina">Interface Homem-Máquina</option>
                                                                                                                            <option value="Progamacao Concorrente">Programação Concorrente</option>
                                                                                                                            <option value="Xml">XML</option>
                                                                                                                    </select>
                                                                                                            </div>
                                                                                                    </div>
                                    
                                                                                                    <div class="form-group">
                                                                                                            <label for="selectDependencia" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Dependência:</label>
                                                                                                            <div class="col-xs-6-col-sm-10 col-md-11 col-lg-10">
                                                                                                                    <select name="selectDependencia" id="selectDependencia" class="form-control" required>
                                                                                                                        <option> Dependencia </option>
                                                                                                                            <option value="RDR">RDR</option>
                                                                                                                            <option value="STR">STR</option>
                                                                                                                            <option value="GTR">GTR</option>
                                                                                                                            <option value="TRT">TRT</option>
                                                                                                                            <option value="STER">STER</option>
                                                                                                                    </select>
                                                                                                            </div>
                                                                                                    </div>
                                    
                                                                                                    <div class="form-group">
                                                                                                            <label for="semestre" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Semestre:</label>
                                                                                                            <div class="col-xs-6 col-sm-10 col-sm-11 col-lg-10">
                                                                                                                <select name="semestre" id="selectSemestre" class="form-control" required>
                                                                                                                            <option>Semestres</option>
                                                                                                                            <option value="1°">1º</option>
                                                                                                                            <option value="2°">2º</option>
                                                                                                                            <option value="3°">3º</option>
                                                                                                                            <option value="4°">4º</option>
                                                                                                                            <option value="5°">5º</option>
                                                                                                                            <option value="6°">6º</option>
                                                                                                                            <option value="7°">7º</option>
                                                                                                                            <option value="8°">8º</option>
                                                                                                                            <option value="9°">9º</option>
                                                                                                                    </select>
                                                                                                            </div>
                                                                                                    </div>-->

                                    <div class="form-group">
                                        <label for="inputPhone" class="col-xs-3 col-sm-2 col-md-2 control-label">Telefone:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <input type="text" class="form-control" name="telefone" id="inputPhone" placeholder="00-0000-0000" maxlength="14" onkeypress="formatar('##-####-####', this);" required />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="radioSexo" class="col-xs-3 col-sm-2 col-md-2 control-label">Sexo:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <label class="btn btn-primary">
                                                <input type="radio" name="sexo" id="optionMasculino" value="Masculino"> Masculino
                                            </label>

                                            <label class="btn btn-primary">
                                                <input type="radio" name="sexo" id="optionFeminino" value="Feminino"> Feminino
                                            </label>
                                        </div>
                                    </div>

                                    <!--<div class="form-group">
                                            <label for="radioSexo" class="col-xs-6 col-sm-2 col-md-1 col-lg-2 control-label">Sexo:</label>
                                            <div class="col-xs-6 col-sm-10 col-md-11 col-lg-10">
                                                    <label class="radio-inline">
                                                            <input type="radio" name="optionSexo" id="optionMasculino" value="masculino">Masculino
                                                    </label>

                                                    <label class="radio-inline">
                                                            <input type="radio" name="optionSexo" id="optionFeminino" value="feminino">Feminino
                                                    </label>
                                            </div>
                                    </div>-->

                                    <div class="form-group">
                                        <label for="inputNasc" class="col-xs-3 col-sm-2 col-md-2 control-label">Nascimento:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <input type="date" name="nascimento" class="form-control" id="inputNac" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail" class="col-xs-3 col-sm-2 col-md-2 control-label">E-mail:</label>
                                        <div class="col-xs-8 col-sm-5 col-md-5">
                                            <input type="text" name="email" class="form-control" id="inputEmail" maxlength="50" placeholder="Digite seu e-mail">
                                        </div>
                                    </div>

                                    <div class="col-md-offset-4">
                                        <button type="submit" class="btn btn-success">Cadastrar</button>
                                        <a href="javascript:window.history.go(-1)"><button type="button" class="btn btn-warning">Cancelar</button></a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br /> <br />
<?php require_once '../inc/rodape.php'; ?>
    </body>
</html>