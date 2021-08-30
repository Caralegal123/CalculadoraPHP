<?php

$n1 = $_POST['1num'];
$n2 = $_POST['2num'];
$op = $_POST['operacao'];

// Checando se um numero foi inserido
if (($n1 || $n2) == empty($_POST)) {
    echo "Nenhum numero inserido";
    echo "<br>";

}

// Checando se uma operação foi selecionada
if ($op == empty($_POST)) {
    echo "Nenhuma operação selecionada";
    echo "<br>";

}

switch($op){
    case "adicao":
        adicao($n1, $n2);
    break;
    case "subtracao":
        subtracao($n1, $n2);
    break;
    case "multiplicacao":
        multiplicacao($n1, $n2);
    break;
    case "divisao":
        divisao($n1, $n2);
    break;
    case "potencia":
        potencia($n1, $n2);
    break;
    case "raiz":
        raiz($n1, $n2);
    break;
}

function subtracao($n1, $n2)
{
    echo "O valor da subtração é: " . $n1 - $n2;
    agradecimento();
}


function adicao($n1, $n2)
{
    echo "O valor da adição é: " . $n1 + $n2;
    agradecimento();
}


function multiplicacao($n1, $n2)
{
    echo "O valor da multiplicação é: " . $n1 * $n2;
    agradecimento();
}

function divisao($n1, $n2)
{
    echo "O resultado da divisão é: " . $n1 / $n2;
    agradecimento();
}

function potencia($n1, $n2)
{
    echo "O resultado da potenciação do primeiro numero é: " . $n1 * $n1;
    echo "<br>";
    echo "O resultado da potenciação do segundo numero é: " . $n2 * $n2;
    agradecimento();
}

function raiz($n1, $n2,)
{
    echo "A raiz quadrada do primeiro numero é: " . sqrt($n1);
    echo "<br>";
    echo "A raiz quadrada do segundo numero é: " . sqrt($n2);
    agradecimento();
}

function agradecimento()
{
    echo '<br>';
    echo "Obrigado por utilizar meu programa! :)";
}


