<?php 

namespace Alura\Banco\Modelo;

class Endereco {

    private string $cep;
    private string $numero;
    private string $bairro;
    private string $cidade;
    private string $rua;

    public function __construct(string $cep,string $numero,string $bairro,string $cidade, string $rua)
    {
        $this->cep = $cep;
        $this->numero = $numero;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->rua = $rua;
    }
    
    public function retornarCep() : string
    {
        return $this->cep;
    }

    public function retornarNumero() : string
    {
        return $this->numero;
    }

    public function retornarBairro() : string
    {
        return $this->bairro;
    }

    public function retornarCidade() : string
    {
        return $this->cidade;
    }

    public function retornarRua() : string
    {
        return $this->rua;
    }

    public function __toString() : string
    {
    return "$this->rua, $this->numero, $this->bairro, $this->cidade, $this->cep" . PHP_EOL;  

    }

    public function __get($nomeAtributo)
    {
        $metodo = 'retornar' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
    
}

?>