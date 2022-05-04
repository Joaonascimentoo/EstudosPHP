<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{Pessoa,CPF};


abstract class Funcionario extends Pessoa
{
    private string $cargo;
    private float $salario;

    public function __construct(string $nome,CPF $cpf,string $cargo,float $salario)
    {
        parent::__construct($nome,$cpf);
        $this-> cargo = $cargo;
        $this-> salario = $salario;
        
    }

    public function retornaCargo(): string
    {
        return $this->cargo;
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
    public function calculaBonificacao() : float
    {
        return $this-> salario * 0.1;
    }
    public function aumentaSalario(float $valorAumento) : void 
    {
        if($valorAumento < 0){
            echo "Não é possivel diminuir o salário de um funcionário!";
            return;
        }

        $this->salario += $valorAumento;
    }
}
