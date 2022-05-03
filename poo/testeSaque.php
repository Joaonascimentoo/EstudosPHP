<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;


$cliente1 = new Titular('Joao Pedro',new CPF('123.123.123-12'),new Endereco('123123-123',123,'teste','teste','teste'));
$cliente2 = new Titular('Luiz Guilherme',new CPF('123.411.513-15'),new Endereco('76451-653',764,'teste','teste','teste'));

$conta1 = new ContaPoupanca($cliente1);
$conta1 -> depositar(1000.0);
$conta1 -> sacar(100.0);
$conta2 = new ContaCorrente($cliente2);
$conta2->depositar(1000.0);
$conta2->sacar(100.0);

echo $conta1 -> recuperarNomeTitular() . PHP_EOL;
echo $conta1 -> recuperarCpfTitular() . PHP_EOL;
echo $conta1 -> recuperarSaldo() . PHP_EOL;
echo $conta2 -> recuperarNomeTitular() . PHP_EOL;
echo $conta2 -> recuperarCpfTitular() . PHP_EOL;
echo $conta2 -> recuperarSaldo() . PHP_EOL;

?>