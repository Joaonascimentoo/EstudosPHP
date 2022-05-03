<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;



$cliente = new Titular('Joao Pedro Muniz',new CPF('123.123.123-12'),new Endereco('22657-335',193,'teste','Rio de Janeiro','teste'));
$conta1 = new Conta($cliente);
$conta1 -> depositar(500.0);
$conta1 -> sacar(200.0);
$cliente = new Titular('Fabricia',new CPF('113.144.151-98'), new Endereco('12345-123', 123, 'teste2', 'Rio de Janeiro', 'teste2'));
$conta2 = new Conta($cliente);
$conta2 -> depositar(500.0);
$conta2 -> sacar(200.0);


echo $conta1 ->recuperarNomeTitular() . PHP_EOL;
echo $conta1 ->recuperarCpfTitular() . PHP_EOL;
echo $conta1 ->recuperarSaldo() . PHP_EOL;
echo Conta:: recuperarNumeroConta() . PHP_EOL;
?>