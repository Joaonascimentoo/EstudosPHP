<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Funcionario\{Desenvolvedor, Diretor, EditorVideo, Gerente};

$funcionario = new Desenvolvedor('Joao Pedro',new CPF('123.123.123-12'),2200.0);
$funcionario->sobeDeNivel();
$funcionario2 = new Gerente('Carlos',new CPF('512.412.652-87'),5000.0);
$funcionario3 = new Diretor('Ricardo', new CPF('982.685.684-98'),4000.0);
$funcionario4 = new EditorVideo('Rafaela',new CPF('985.485.476-87'),2000.0);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($funcionario);
$controlador->adicionaBonificacaoDe($funcionario2);
$controlador->adicionaBonificacaoDe($funcionario3);
$controlador->adicionaBonificacaoDe($funcionario4);



echo $controlador->retornaTotalBonificacoes();


?>