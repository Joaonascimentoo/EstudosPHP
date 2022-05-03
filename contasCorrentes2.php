<?php


$conta1 = ['titular' => 'João',
            'saldo' => 1000];
$conta2 = ['titular' => 'Maria',
    'saldo' => 1200];
$conta3 = ['titular' => 'José',
    'saldo' => 1400];

$contasCorrentes = [$conta1,$conta2,$conta3];

$contador = count($contasCorrentes);

$i = 0;
foreach($contasCorrentes as $row){
    echo "Titular: " . $contasCorrentes[$i]['titular'].PHP_EOL;
    echo "Saldo: " . $contasCorrentes[$i]['saldo'].PHP_EOL;

    $i++;
}
