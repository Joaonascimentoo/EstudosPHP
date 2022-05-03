<?php

namespace Alura\Banco\Modelo\Conta;


abstract class Conta
{
    //definindo dados da conta
    private Titular $titular;
    protected float $saldo;
    private static int $numeroDeContas = 0;
    //Tipo conta 1 == Conta Corrente e 2 == Conta Poupança

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;

        self:: $numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar) : void
    {
       
        $tarifaDeSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaDeSaque;
        if($valorSaque > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
        
    }

    public function depositar(float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo "Não é possivél depositar saldo negativo!";
            return;
        }

        $this->saldo += $valorADepositar;
        
    }

    public static function recuperarNumeroConta() : int
    {
        return self:: $numeroDeContas;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->retornaNome();
    }
    public function recuperarCpfTitular(): string
    {
        return $this->titular->retornaCpf();
    }
    public function recuperarSaldo(): string
    {
        return $this->saldo;
    }
    public function recuperarCepTitular(): string
    {
        return $this->endereco->cep->retornarCep();
    }
    public function recuperarNumeroTitular(): string
    {
        return $this->endereco->numero->retornarNumero();
    }
    public function recuperarBairroTitular(): string
    {
        return $this->endereco->bairro->retornarBairro();
    }
    public function recuperarCidadeTitular(): string
    {
        return $this->endereco->cidade->retornarCidade();
    }
    public function recuperarRuaTitular(): string
    {
        return $this->endereco->rua->retornarRua();
    }
    abstract protected function percentualTarifa(): float; 
}






?>