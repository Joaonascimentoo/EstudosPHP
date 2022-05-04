<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa 
{
    use AcessoAPropriedades;
    
    protected string $nome;
    private CPF $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNomeTitular($nome);
        $this-> nome = $nome;
        $this-> cpf = $cpf;
    }

    public function retornaNome(): string
    {
        return $this-> nome;
    }

    public function retornaCpf(): string
    {
        return $this->cpf->retornarNumero();
    }

    protected final function validaNomeTitular(string $nomeTitular)
    {
        if (strLen($nomeTitular) < 5) {
            echo "O nome do titular precisar ter pelo menos 5 caracteres";
            exit();
        }
    }
}






?>