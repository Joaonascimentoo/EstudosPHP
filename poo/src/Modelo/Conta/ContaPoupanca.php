<?php

namespace Alura\Banco\Modelo\Conta;


class ContaPoupanca extends Conta
{
    public function sacar(float $valorASacar): void
    {
        $tarifaDeSaque = $valorASacar * 0.03;
        $valorSaque = $valorASacar + $tarifaDeSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }
    

  
}





?>