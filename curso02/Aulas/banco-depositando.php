<?php

require_once 'funcoes.php';

// Criando um array com informações bancárias
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

/* Atribuindo um novo saldo ao cliente do cpf 12345678910 caso ele tenho saldo sulfuciênte para sacar certa quantia */
$contasCorrentes['123.456.789-10']['saldo'] = depositar($contasCorrentes['123.456.789-10'], 10000);

// Mostrando as informações atualizadas
foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("{$cpf}: {$conta['titular']} {$conta['saldo']}");
}

