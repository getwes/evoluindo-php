<?php

function exibeMensagem($mensagem){
    echo $mensagem . '<br>';
}

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não pode sacar este valor");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}
function depositar(array $conta, float $valorADepositar): array {
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depósitos precisam ser positivos");
    }

    function titularcomletrasmaiuscula(array &$conta){
        $conta['titular'] = strtoupper($conta['titular']);
    }

    function exibeconta(array $conta){
        ['titular' => $titular, 'saldo' => $saldo] = $conta;
        echo  "<li>titular: $titular. saldo: $saldo</li>";
    }

    return $conta;
}
