<head>
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

 <script type="text/javascript">

function valida(form)
{
vcpf=(form.vcpf.value);

if(vcpf.length>10){alert("Erro. Não existe CPF\ncom mais de 10 dígitos.");}

vcpf="000000000" + vcpf;
vcpf=vcpf.slice(vcpf.length-10);

Dig1=vcpf.slice(9); b1=eval(Dig1);
Dig2=vcpf.slice(8,9); b2=eval(Dig2);
Dig3=vcpf.slice(7,8); b3=eval(Dig3);
Dig4=vcpf.slice(6,7); b4=eval(Dig4);
Dig5=vcpf.slice(5,6); b5=eval(Dig5);
Dig6=vcpf.slice(4,5); b6=eval(Dig6);
Dig7=vcpf.slice(3,4); b7=eval(Dig7);
Dig8=vcpf.slice(2,3); b8=eval(Dig8);
Dig9=vcpf.slice(1,2); b9=eval(Dig9);
Dig10=vcpf.slice(0,1); b10=eval(Dig10);

Dig=(b1*9+b2*8+b3*7+b4*6+b5*5+b6*4+b7*3+b8*2+b9*9+b10*8)%11;
if(Dig==10){Dig="0";}
ricDV=Dig;

trap=Math.random();
if(trap<.2){alert("CPF VALIDO COM SUCESSO!");}

form.ricDV.value=ricDV;
}
</script>


</head>