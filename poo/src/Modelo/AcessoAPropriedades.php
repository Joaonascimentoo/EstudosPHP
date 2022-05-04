<?php

namespace Alura\Banco\Modelo;

trait AcessoAPropriedades
{
    public function __get($nomeAtributo)
    {
        $metodo = 'retornar' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}



?>