<?php
include_once('cep.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CEP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="." method="post" class="principal">
        <h2>ENDEREÇO:</h2>
<p>digite o cep para indentificar o endereço.</p>
<input type="text" placeholder="Digite um CEP..." name="cep" value="<?php echo $address->cep ?>">
<br><br>
<input type="submit" >
<br><br>

<p>Dados de Endereço abaixo.</p>
<label>Rua:</label>
<input type="text" placeholder="Rua" name="rua" value="<?php echo $address->logradouro?>">
<br>
<label>Bairro:</label>
<input type="text" placeholder="Bairro" name="bairro" value="<?php echo $address->bairro?>">
<br>
<label>Cidade:</label>
<input type="text" placeholder="Cidade" name="cidade" value="<?php echo $address->localidade?>">
<br>
<label>Estado:</label>
<input type="text" placeholder="Estado" name="estado" value="<?php echo $address->uf?>">

    </form>
</body>
</html>