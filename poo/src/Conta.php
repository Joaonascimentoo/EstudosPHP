<?php

class Conta
{
    //definindo dados da conta
    private $titular;
    private float $saldo;
    private static int $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this-> saldo = 0;

        self:: $numeroDeContas++;
    }

    public function __destruct()
    {
        self::$numeroDeContas--;
    }

    public function sacar(float $valorASacar) : void
    {
        if($valorASacar > $this->saldo){
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorASacar;
        
    }

    public function depositar(float $valorADepositar) : void
    {
        if ($valorADepositar < 0) {
            echo "Não é possivél depositar saldo negativo!";
            return;
        }

        $this->saldo += $valorADepositar;
        
    }

    public function transferir(float $valorATransferir, Conta $contaDestino) : void
    {
        if($valorATransferir > $this-> saldo){
            echo "Voce nao possui esse valor disponivel";
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino-> depositar($valorATransferir);
        
    }

    public static function recuperarNumeroConta() : int
    {
        return self:: $numeroDeContas;
    }

    public function recuperarNomeTitular(): string
    {
        return $this->titular->recuperaNome();
    }
    public function recuperarCpfTitular(): string
    {
        return $this->titular->recuperaCpf();
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
}






?>