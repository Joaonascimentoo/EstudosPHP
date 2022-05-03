<?php

$num = 2;
echo "Tabuada do número $num" . PHP_EOL;

for ($i = 1;$i <= 10; $i++){
    $multi = $num * $i;
    echo "$num X $i = $multi" . PHP_EOL;
}