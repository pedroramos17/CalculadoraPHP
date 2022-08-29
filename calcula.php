<?php
$num1 = 10;
$num2 = 20;
$result = 0;
$operacao = "";
$operador = 1;

switch($operador){
    case 1 :
        $operacao = "soma";
        echo "O resultado da ".$operacao." é ".somaValor($num1, $num2).".";
        break;
    default : echo "Resultado inválido!";
}

function somaValor($num1, $num2){
    return($num1+$num2);
}
?>