<?php

$base = 5;
$expoente = 4;

$resultado = 1;
$count = 1;

while($count <= $expoente){
    $resultado *= $base;
    $count++;
   }
   echo "Resultado:" . $resultado;
   
?>