<?php
$nota1 = 7;
$nota2 = 8;
$nota3 = 8;
$nota4 = 8;

$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

echo("Sua média é:" . $media . " e você está:" );

if($media<=4.5){
    echo ("Reprovado!!");
} else if(($media>5) && ($media<=6.9)){
echo (" em Exame!!!");
}else{
 echo ("Aprovado!!");
 }
?>