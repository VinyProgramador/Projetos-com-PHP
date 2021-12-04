<?php

$salarioOp = 2000;
$salarioTotalOp = ((0.15 * $salarioOp) + $salarioOp);
$salarioAtualDs = 2500;
echo("O salário total de um funcionário do departamento operacional é de: \n" . $salarioTotalOp . "\n reais.");

if(1500<=$salarioAtualDs && $salarioAtualDs>1750) {
       $salarioTotalDs = ((0.12 * $salarioAtualDs) + $salarioAtualDs);
    echo ("O salário total de um funcionário do departamento de desenvolvimento é de: \n" . $salarioTotalDs . "\n reais.");
}
else if ($salarioAtualDs<2000) {
    $salarioTotalDs = ((0.10 * $salarioDs) + $salarioDs); 
    echo("O salário total de um funcionário do departamento de desenvolvimento é de: \n" . $salarioTotalDs . "\n reais.");
}
else if ($salarioAtualDs<3000) {
    $salarioTotalDs = ((0.7 * $salarioDs) + $salarioDs);
    echo("O salário total de um funcionário do departamento de desenvolvimento é de: \n" . $salarioTotalDs . "\n reais.");
}
else  {
    $salarioTotalDs = ((0.5 * $salarioDs) + $salarioDs); 
    echo("O salário total de um funcionário do departamento de desenvolvimento é de: \n" . $salarioTotalDs . "\n reais.");
}

?>