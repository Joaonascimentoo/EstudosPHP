<?php

$contasCorrentes = [
    '191.545.947-94' => [
        'titular' => 'João',
        'saldo' => 1000
    ],
    '191.547.947-44' => [
        'titular' => 'Maria',
        'saldo' => 1200
    ], 
    '191.547.947-94' => [
        'titular' => 'José',
        'saldo' => 1400
    ]
];

$contasCorrentes ['91813817378'] = [
    'titular' => 'Carlos',
    'saldo' => 1500
    ];

foreach($contasCorrentes as $cpf => $conta){
    echo $conta['titular'].PHP_EOL;

}
