<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa,CPF};


abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome,CPF $cpf,float $salario)
    {
        parent::__construct($nome,$cpf);
        $this-> salario = $salario;
        
    }

    public function alteraNome($nome) : void
    {
        $this->validaNomeTitular($nome);
        $this-> nome = $nome;
    }
    public function retornaSalario(): float
    {
        return $this->salario;
    }
    abstract public function calculaBonificacao() : float;
    
    public function aumentaSalario(float $valorAumento) : void 
    {
        if($valorAumento < 0){
            echo "Não é possivel diminuir o salário de um funcionário!";
            return;
        }

        $this->salario += $valorAumento;
    }
}
