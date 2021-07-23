<?php

/* Criando um programa que verifica se a pessoa tem acima de 18 anos ou acima de 16 e acompanhada para poder deixar ela entrar em uma festa. Caso o contrario, não entrará.*/

$idade = 22;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar sozinho.";
} else if ($idade >= 16 && $numeroDePessoas > 1) {
    echo "Você $idade anos. Está acompanhado(a), então pode entrar.";
} else {
    echo "Você só tem $idade anos. Você não pode entrar.";
}

echo PHP_EOL;
echo "Adeus!";
