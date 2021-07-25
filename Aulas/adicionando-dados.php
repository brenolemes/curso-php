<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '564.287.563-45' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '126.845.975-42' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ]
];


// Dado adicionado no array $contasCorrentes
// É possível adicionar sem específicar a chave ($contasCorrentes[])
// Porém, índicice será dado altomáticamente.
$contasCorrentes['554.122.544-61'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

// Mostrando os dados do array contasCorrentes
foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}