<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Funcionario,CPF};

$funcionario = new Funcionario('Joao Pedro',new CPF('123.123.123-12'),'Desenvolvedor',2200.0);
$funcionario2 = new Funcionario('Carlos',new CPF('512.412.652-87'),'Desenvolvedor',2500.0);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario);
$controlador->adicionaBonificacaoDe($funcionario2);

echo $controlador->retornaTotalBonificacoes();


?>