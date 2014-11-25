    <meta charset="UTF-8">
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