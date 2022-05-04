<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
    public function fazerLogin(Autenticavel $autenticavel, string $senha): bool
    {
        if($autenticavel->podeAutenticar($senha)){
            echo "Acesso Permitido!"  . PHP_EOL;
            return true;
        }else{
            echo "Senha incorreta, acesso negado!"  . PHP_EOL;
            return false;
        }
    }
}


?>