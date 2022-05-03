<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;


$cliente1 = new Titular('Joao Pedro',new CPF('123.123.123-12'),new Endereco('123123-123',123,'teste','teste','teste'));
$conta1 = new Conta($cliente1);

$conta1 -> depositar(1000.0);
$conta1 -> sacar(100.0);

echo $conta1 -> recuperarNomeTitular() . PHP_EOL;
echo $conta1 -> recuperarCpfTitular() . PHP_EOL;
echo $conta1 -> recuperarSaldo() . PHP_EOL;

?>