<?php

/* Todas as chaves serão alteradas para 1. Portanto, a cada atribuição eu altero o valor da chave 1. */
$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    True => 'd'
];

foreach ($array as $item) {
    echo $item . PHP_EOL;
}