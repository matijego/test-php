<?php

function suma($num1, $num2){
    $resultado = $num1 + $num2;
    return $resultado;
}

$num1 = 5;
$num2 = 2;

$res = suma($num1, $num2);

echo $res;
echo max($num1, $num2, "\n");

?>