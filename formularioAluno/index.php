<!DOCTYPE html>
<html Lang="pt-br">
   <head>
   <meta charset="UTF-8">
   <title> Cadastro de Alunos </title>
</head>

<body>
<h1> Cadastro de Alunos </h1>
   <form name="cadatro-aluno" method="POST" action="cadastro-aluno-POST.php"> 
      
       <label> Nome: </label>
       <input type="text" name="txtNome" id="txtNome">

       <br>

       <label> Sexo: </label>
       <input type="radio" name="txtSexo" id="txtSexo"> Fem
       <input type="radio" name="txtSexo" id="txtSexo"> Mas

       <br>

       <label> Data de Nascimento: </label>
       <input type="date" name="txtDataNascimento" id="txtDataNascimento">

       <br>

       <label> Turma: </label>
       <select name="turma" id="turma">
          <option> 1 Mtec DS </option>
          <option> 2 Mtec DS </option>
          <option> 3 Mtec DS </option>  
       </select>

       <br>

       <input type="submit" value="Cadastrar">



</body>