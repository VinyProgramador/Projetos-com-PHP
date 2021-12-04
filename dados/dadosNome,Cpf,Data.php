<?php

$nome = $_POST['txtNome'];
$cpf = $_POST['txtCPF'];
$dtNasc = $_POST['txtDtNasc'];


$vetor = array(

    "nome" => $nome,
    "cpf" => $cpf,
    "DataNasc" => $dtNasc

);

echo ("<br>Nome: ". $vetor['nome'] . 
    "<br>CPF: ". $vetor['cpf'] . 
    "<br>Data de Nascimento: " . $vetor['DataNasc']);

?>