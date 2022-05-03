<?php

$idade1 = 1 ;
$idade2 = 2 ;
$idade3 = 3 ;
$idade4 = 4 ;

$idadeList = [1,2,3,4,5,6];

$idadeList[6] = 19;

foreach($idadeList as $idade){
    echo $idade.PHP_EOL;

};
