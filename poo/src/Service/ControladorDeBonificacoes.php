<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Funcionario;

class ControladorDeBonificacoes
{

    private float $totalBonificacoes=0;

    public function adicionaBonificacaoDe(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

    public function retornaTotalBonificacoes() : float
    {
        return $this->totalBonificacoes;
    }
}

?>