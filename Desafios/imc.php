<?php

// Calculo do IMC

/*Peso normal: IMC entre 18,5 e 24,9.
Sobrepeso: IMC entre 25 e 29,9.
Obesidade Grau I: IMC entre 30 e 34,9.
Obesidade Grau II: IMC entre 35 e 39,9.
Obesidade Grau III: IMC acima de 40. */

$peso = 130;
$altura = 1.69;
$resultado = $peso / ($altura ** 2);

if ($resultado >= 18.5 && $resultado < 25) {
    echo "IMC = $resultado. " . "Peso normal";
} elseif ($resultado >= 25 && $resultado < 30) {
    echo "IMC = $resultado. " . "Sobrepeso";
} elseif ($resultado >=30 && $resultado < 35) {
    echo "IMC = $resultado. " . "Obesidade grau 1";
} elseif ($resultado >= 35 && $resultado < 40) {
    echo "IMC = $resultado. " . "Obesidade grau 2";
} elseif ($resultado >= 40) {
    echo "IMC = $resultado. " . "Obesidade grau 3";
}
