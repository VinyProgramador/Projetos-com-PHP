<?php

//LINHA 
$sigla1 = $_GET['s1'];
$capital1 = $_GET['c1'];

//LINHA 2
$sigla2 = $_GET['s2'];
$capital2 = $_GET['c2'];

//LINHA 3
$sigla3 = $_GET['s3'];
$capital3 = $_GET['c3'];

//LINHA 4
$sigla4 = $_GET['s4'];
$capital4 = $_GET['c4'];

//LINHA 5
$sigla5 = $_GET['s5'];
$capital5 = $_GET['c5'];

//LINHA 6
$sigla6 = $_GET['s6'];
$capital6 = $_GET['c6'];

//LINHA 7
$sigla7 = $_GET['s7'];
$capital7 = $_GET['c7'];

//LINHA 8
$sigla8 = $_GET['s8'];
$capital8 = $_GET['c8'];

//LINHA 9
$sigla9 = $_GET['s9'];
$capital9 = $_GET['c9'];

//LINHA 10
$sigla10 = $_GET['s10'];
$capital10 = $_GET['c10'];

//VETOR DAS SIGLAS E DAS CAPITAIS
$vetor = array (

    "sg1" =>  $sigla1, //LINHA 1
    "cp1" =>  $capital1,
    
    "sg2" =>  $sigla2, //LINHA 2
    "cp2" =>  $capital2,

    "sg3" =>  $sigla3,//LINHA 3
    "cp3" =>  $capital3,

    "sg4" =>  $sigla4,//LINHA 4
    "cp4" =>  $capital4,

    "sg5" =>  $sigla5, //LINHA 5
    "cp5" =>  $capital5, 

    "sg6" =>  $sigla6, //LINHA 6
    "cp6" =>  $capital6,
    
    "sg7" =>  $sigla7, //LINHA 7
    "cp7" =>  $capital7,
    
    "sg8" =>  $sigla8, //LINHA 8
    "cp8" =>  $capital8,

    "sg9" =>  $sigla9, //LINHA 9
    "cp9" =>  $capital9,

    "sg10" =>  $sigla10, //LINHA 10
    "cp10" =>  $capital10,

);
echo(
"Sigla: ". $vetor['sg1'] . " - " . "Capital: " .$vetor['cp1']."<p>" //LINHA 1

."Sigla: ". $vetor['sg2'] . " - " . "Capital: " .$vetor['cp2']."<p>" //LINHA 2

."Sigla: ". $vetor['sg3'] . " - " . "Capital: " .$vetor['cp3']."<p>" //LINHA 3

."Sigla: ". $vetor['sg4'] . " - " . "Capital: " .$vetor['cp4']."<p>" //LINHA 4

."Sigla: ". $vetor['sg5'] . " - " . "Capital: " .$vetor['cp5']."<p>" //LINHA 5

."Sigla: ". $vetor['sg6'] . " - " . "Capital: " .$vetor['cp6']."<p>" //LINHA 6
 
."Sigla: ". $vetor['sg7'] . " - " . "Capital: " .$vetor['cp7']."<p>" //LINHA 7

."Sigla: ". $vetor['sg8'] . " - " . "Capital: " .$vetor['cp8']."<p>" //LINHA 8
 
."Sigla: ". $vetor['sg9'] . " - " . "Capital: " .$vetor['cp9']."<p>" //LINHA 9

."Sigla: ". $vetor['sg10'] . " - " . "Capital: " .$vetor['cp10'] //LINHA 10
);


?>