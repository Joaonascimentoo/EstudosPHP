<?php 

class Titular{
    
    private string $nome;
    private $cpf;
    private $endereco;

    public function __construct(string $nome,CPF $cpf, Endereco $endereco)
    {
        $this-> cpf = $cpf;
        $this-> validaNomeTitular($nome);
        $this-> nome = $nome;
        $this-> endereco = $endereco;


    }
    public function recuperaCpf() : string
    {
        return $this->cpf->retornarNumero();
    }
    public function recuperaNome() : string
    {
        return $this->nome;
    }
    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }

    private function validaNomeTitular($nomeTitular)
    {
        if (strLen($nomeTitular) < 5) {
            echo "O nome do titular precisar ter pelo menos 5 caracteres";
            exit();
        }
    }


}



?>