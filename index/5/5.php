<?php

$a = 0;
$b = 1;
$num = 10;

echo $a." ".$b." ";

$cont = 2;
while ($cont < $num) {
    $res = $a + $b;
    $a = $b;
    $b = $res;

    echo " ".$res;
    $cont++;
}
?>