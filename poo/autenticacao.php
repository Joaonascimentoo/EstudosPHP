<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\{CPF,Endereco};
use Alura\Banco\Modelo\Funcionario\{Gerente,Diretor};

$diretor = new Diretor('Rafael',new CPF('658.848.635-98'),5000.0);
$gerente = new Gerente('Leonardo',new CPF('658.848.635-98'),5000.0);
$titular = new Titular('Carlos Augusto', new CPF('658.848.635-98'),new Endereco('21487-87','854','teste','teste','teste','teste'));
$autenticar = new Autenticador();
$autenticar->fazerLogin($diretor,'1234');
$autenticar->fazerLogin($gerente,'4321');
$autenticar->fazerLogin($titular,'5678');

?>