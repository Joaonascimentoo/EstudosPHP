<?php

//$alunos = 15;
//
//$contador = 1;
//$contadorDeAlunos = $alunos;
//
//while ($contadorDeAlunos >= $contador){
//    echo "Aluno $contador" . PHP_EOL;
//    $contador++;
//}

for ($contador = 1; $contador <= 15; $contador++){
    if ($contador === 13){
//        continue; Pula a interação
        break; // Para quando a condição for respeitada
    }
        echo "Aluno $contador" . PHP_EOL;
}
