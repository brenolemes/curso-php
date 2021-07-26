<?php

// Criando uma função para depositar
function depositar(array $conta, float $valorADepositar) {
    if ($valorADepositar > 0) {
        return $conta['saldo'] += $valorADepositar;
    } else {
        return $conta['saldo'] = $conta['saldo'];
    }
}

// Criando uma função para sacar
function sacar(array $conta, float $valorASacar)
{
    if ($conta['saldo'] < $valorASacar) {
        return $conta['saldo'] = $conta['saldo'];
    } else {
        return $conta['saldo'] -= $valorASacar;
    }    
};

// Criando uma subrotina para exibir mensagem
function exibeMensagem($mensagem) {
    echo $mensagem . PHP_EOL;
};
