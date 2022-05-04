<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$endereço1 = new Endereco('22888-878','165','teste1','teste1','teste1');
$endereço2 = new Endereco('12313-123','531','teste2','teste2','teste2');
$endereço3 = new Endereco('65423-084','987','teste3','teste3','teste3');
$endereço4 = new Endereco('95475-987','367','teste4','teste4','teste4');

echo $endereço1->rua;


?>