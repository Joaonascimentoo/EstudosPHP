<?php
// o php só aceita indíces inteiros ou uma string
$array = [
    1 => 'a', 
    '1' => 'b', // é convertido para inteiro e fica valendo 1 
    1.5 => 'c', // é convertido para inteiro e fica valendo 1
    true => 'd' // o valor de true é 1 quando convertido para inteiro

];

foreach($array as $indice){
    echo $indice . PHP_EOL;
};