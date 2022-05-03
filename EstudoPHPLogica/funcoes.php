<?php

function exibeMensagem(string $mensagem)
{
    echo $mensagem . '<br>';
};

function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem(mensagem: "Você não pode sacar esse valor");
    } else {
        $conta['saldo'] -= $valorASacar;
        exibeMensagem(mensagem: "Saque de $valorASacar efutado com sucesso na conta de " . $conta['titular'] . "!");
    }

    return $conta;
};

function deposito(array $conta, float $valorADepositar): array
{
    if ($valorADepositar <= 0) {
        exibeMensagem(mensagem: "Você não pode depositar 0 reais");
        return $conta;
    } else {
        $conta['saldo'] += $valorADepositar;
        exibeMensagem(mensagem: "Deposíto de $valorADepositar efutado com sucesso na conta de " . $conta['titular'] . "!");
        return $conta;
    }
};

function titularComLetrasMaiusculas(array &$conta){

    $conta['titular'] = mb_strtoupper($conta['titular']);
}

function exibeConta($conta){
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "<li>Titular: $titular Saldo: $saldo</li>";
}