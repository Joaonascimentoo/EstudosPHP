<?php

require_once 'funcoes.php';

$contasCorrentes = [
    '191.547.123-94' => [
        'titular' => 'João',
        'saldo' => 1000
    ],
    '191.547.123-44' => [
        'titular' => 'Maria',
        'saldo' => 1200
    ], 
    '191.547.947-94' => [
        'titular' => 'José',
        'saldo' => 1000
    ]
];

$contasCorrentes['191.547.123-94'] = sacar($contasCorrentes['191.547.123-94'], 500);
$contasCorrentes['191.547.123-44'] = deposito($contasCorrentes['191.547.123-44'], 1000);

unset($contasCorrentes['191.547.123-44']);

titularComLetrasMaiusculas($contasCorrentes['191.547.947-94']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) {?>
        <dt><h3><?php echo $conta['titular']; ?> - <?php echo $cpf; ?></h3></dt>
        <dd><h3> Saldo - <?php echo $conta['saldo']; ?></h3></dd>
        <?php } ?>
    </dl>
</body>
</html>