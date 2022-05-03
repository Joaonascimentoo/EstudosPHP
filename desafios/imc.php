<?php

$peso = 123;
$altura = 1.73;

$imc = $peso / ($altura * $altura);
$imc = number_format($imc,1,",",'');

if($imc < 18.5){
    echo "Seu IMC é $imc, você está abaixo do seu peso ideal!";
}elseif ($imc > 18.5 && $imc < 24.9){
    echo "Seu IMC é $imc, você está no seu peso ideal!";
}elseif ($imc > 25.0 && $imc < 29.9) {
    echo "Seu IMC é $imc, você está com sobrepeso!!";
}elseif ($imc > 30.0 && $imc < 39.9) {
    echo "Seu IMC é $imc, você está com obesidade nivel 2!";
}else{
    echo "Seu IMC é $imc, você está com obesidade nivel 3!";
}