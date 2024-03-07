<!-- 
1 - Observe o trecho de código abaixo:

int INDICE = 13, SOMA = 0, K = 0;

enquanto K < INDICE faça

{

K = K + 1;

SOMA = SOMA + K;

}

imprimir(SOMA);
-->


<p>QUESTÃO 1</p>
<?php


$INDICE = 13; $SOMA = 0; $K = 0;

while ($K < $INDICE)
{
	$K = $K + 1;
	$SOMA = $SOMA + $K;
    
}

echo $SOMA;

?>

<br><br>
<!-- 
2) Dado a sequência de Fibonacci, onde se inicia por 0 e 1 e o próximo valor sempre será a soma dos 2 valores anteriores (exemplo: 0, 1, 1, 2, 3, 5, 8, 13, 21, 34...), escreva um programa na linguagem que desejar onde, informado um número, ele calcule a sequência de Fibonacci e retorne uma mensagem avisando se o número informado pertence ou não a sequência.

IMPORTANTE:
Esse número pode ser informado através de qualquer entrada de sua preferência ou pode ser previamente definido no código;
-->
<p>QUESTÃO 2</p>


 <form method="GET" action="">
    <p>Digite um Numero</p>
    <input type="text" name="entrada">
</form>
 
<?php

$entrada = isset($_GET['entrada']) ? (int)$_GET['entrada'] : 0;
$num1 = 0;
$num2 = 1;

while ($num1 <= $entrada) {
    if ($num1 == $entrada) {
        echo "O número $entrada pertence à sequência de Fibonacci";
        break;
    }

    $numInicio = $num1;
    $num1 = $num2;
    $num2 = $numInicio + $num2;
}

if ($num1 > $entrada) {
    echo "O número $entrada não pertence à sequência de Fibonacci";
}

?>

<br><br>


<!-- 
3) Descubra a lógica e complete o próximo elemento:

a) 1, 3, 5, 7, ___

b) 2, 4, 8, 16, 32, 64, ____

c) 0, 1, 4, 9, 16, 25, 36, ____

d) 4, 16, 36, 64, ____

e) 1, 1, 2, 3, 5, 8, ____

f) 2, 10, 12, 16, 17, 18, 19, ____
-->

<p>QUESTÃO 3</p>
<?php

echo "a) 1, 3, 5, 7, 9, 11, 13," . "<br>";
echo "b) 2, 4, 8, 16, 32, 64, 128, 256, 512". "<br>";
echo "c) 0, 1, 4, 9, 16, 25, 36, 49, 64, 81". "<br>";
echo "d) 4, 16, 36, 64, 100, 144, 196 ". "<br>"; 
echo "e) 1, 1, 2, 3, 5, 8, 13, 21, 34". "<br>";
echo "f) 2, 10, 12, 16, 17, 18, 19, 200". "<br>";

?>

<br><br>

<!-- 
4) Você está em uma sala com três interruptores, cada um conectado a uma lâmpada em uma sala diferente. Você não pode ver as lâmpadas da sala em que está, mas pode ligar e desligar os interruptores quantas vezes quiser. Seu objetivo é descobrir qual interruptor controla qual lâmpada.

Como você faria para descobrir, usando apenas duas idas até uma das salas das lâmpadas, qual interruptor controla cada lâmpada?
-->
<p>QUESTÃO 4</p>
<?php
echo "<p> Ligo dois interruptores, vou até uma sala e vejo qual lâmpada está acessa, volta pro interruptores, desligo apenas um deles e ligo o outro que estava desligado, vou novamente a uma das salas e vejo que, a lampada que permaneceu acessa é referente ao primeiro interruptor que ascendi, e a outra lampada que ascendeu é referente ao segundo interruptor que na primeira ida estava apagado, e o que atualemente está apagdo, se refere ao interruptor que eu desliguei na primeira volta</p>"
?>

<br><br>

<!-- 
 Escreva um programa que inverta os caracteres de um string.

IMPORTANTE:

a) Essa string pode ser informada através de qualquer entrada de sua preferência ou pode ser previamente definida no código;

b) Evite usar funções prontas, como, por exemplo, reverse;

-->
<p>QUESTÃO 5</p>
<form method="GET" action="">
    <p>Digite uma palavra</p>
    <input type="text" name="palavra">
    <input type="submit" value="Inverter">
</form>

<?php
if (isset($_GET['palavra'])) {
    $palavra = $_GET['palavra'];

    function inverterString($str) {
        $tamanho = strlen($str);
        $invertida = '';

        for ($i = $tamanho - 1; $i >= 0; $i--) {
            $invertida .= $str[$i];
        }

        return $invertida;
    }

    $resultado = inverterString($palavra);
    echo "String original: $palavra<br>";
    echo "String invertida: $resultado";
}
?>

