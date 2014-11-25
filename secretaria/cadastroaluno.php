<!Doctype html>
<html lang="pt-BR">
    <?php session_start();
    
        require_once '../classes/validaAcesso.php';
    ?>
    
    <head>
        <?php require_once '..//inc/head.php'; ?>
        <title>Cadastro de Aluno</title>

        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/style.css">

        <!--[if lt IE 9]>
                <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body>

        <?php require_once "../topo.php"; ?>

        <div class="wrapper" role="main">
            <div class="container container-fluid">
                <div class="row">
                    <div id="conteudo" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-header">
                            <h3><span class="glyphicon glyphicon-th-list"></span> Cadastro de Aluno</h3>
                        </div>

                        <form method="post" action="banco.php?acao=cadastrar" class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="form-group row">
                                        <label for="inputRa" class="col-md-1 control-label">RA:</label>
                                        <div class="col-md-2">
                                            <input type="text" class="form-control" id="inputRa" required>
                                        </div>

                                        <label for="inputName" class="col-md-1 control-label">Nome:</label>
                                        <div class="col-md-5">
                                            <input type="text" class="form-control" id="inputName" required>
                                        </div>
                                    </div>
                                    <label for="selectCurso" class="col-md-1 control-label">Curso:</label>
                                    <div class="col-md-3">
                                        <select name="curso" id="curso" class="form-control" required>
                                            <option>Componente Curricular</option>
                                            <option value="Programacao Estruturada">Programação Estruturada</option>
                                            <option value="Programacao Orientada a Objeto">Programacao Orientada a Objetos</option>
                                            <option value="Java">Java</option>
                                            <option value="Sistemas de Banco de Dados">Sistemas de Banco de Dados</option>
                                            <option value="Programação de Banco de Dados">Programacao de Banco de Dados</option>
                                            <option value="Redes de Computadores">Redes de Computadores</option>
                                            <option value="Programacao Comercial">Programacao Comercial</option>
                                            <option value="Inteligencia Artificial">Inteligência Artificial</option>
                                            <option value="Interface Homem-Maquina">Interface Homem-Máquina</option>
                                            <option value="Progamacao Concorrente">Programacao Concorrente</option>
                                            <option value="Xml">XML</option>
                                        </select>
                                    </div>

                                    <label for="selectSemestre" class="col-md-1 control-label">Semestre:</label>
                                    <div class="col-md-2">
                                        <select name="semestre" id="selectSemestre" class="form-control" required>
                                            <option>Semestres</option>
                                            <option value="1">1º</option>
                                            <option value="2">2º</option>
                                            <option value="3">3º</option>
                                            <option value="4">4º</option>
                                            <option value="5">5º</option>
                                            <option value="6">6º</option>
                                            <option value="7">7º</option>
                                            <option value="8">8º</option>
                                            <option value="9">9º</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inputPhone" class="col-md-1 control-label">Telefone:</label>
                                    <div class="col-md-2">
                                        <input type="phone" class="form-control" id="inputPhone" name="telefone" placeholder="00-0000-0000" maxlength="12" required onkeypress="formatar('##-####-####', this);" required />
                                    </div>

                                    <label for="sexo" class="col-md-1 control-label">Sexo:</label>
                                    <div class="col-md-2">
                                        <select name="sexo" class="form-control">
                                            <option value="">Selecione</option>
                                            <option value="feminino">Feminino</option>
                                            <option value="masculino">Masculino</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputNasc" class="col-md-1 control-label">Nascimento:</label>
                                    <div class="col-md-2">
                                        <input type="date" class="form-control" id="inputNac" required>
                                    </div>

                                </div>

                               <label for="inputEmail" class="col-md-1 control-label">Email:</label>
                            <div class="col-md-3">
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Digite seu e-mail" id="inputEmail" maxlength="60">
                            </div>
                            </div>
                            
                            <div class="pull-right">
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
<?php require_once '../inc/rodape.php'; ?>
</body>
</html>
