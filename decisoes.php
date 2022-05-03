<?php

$idade = 16;
$numPessoas = 1;

echo "Você só pode entrar se tiver mais de 18 anos." . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos.Pode entrar sozinho." ;
} elseif ($idade >= 16 && $numPessoas > 1){
    echo "Você tem $idade anos, você está acompanhando, pode entrar.";
}else {
    echo "Você tem $idade anos, você não pode entrar sozinho.";
};

echo PHP_EOL;
echo "Adeus!";