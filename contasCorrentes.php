<?php


$conta1 = ['titular' => 'João',
            'saldo' => 1000];
$conta2 = ['titular' => 'Maria',
    'saldo' => 1200];
$conta3 = ['titular' => 'José',
    'saldo' => 1400];

$contasCorrentes = [$conta1,$conta2,$conta3];

$contador = count($contasCorrentes);

for($i = 0; $i < $contador;$i++){
    echo $contasCorrentes[$i]['titular'].PHP_EOL;
}