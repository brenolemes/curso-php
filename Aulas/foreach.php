<?php

// Usando o foreach
$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    56428756345 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12684597542 => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}