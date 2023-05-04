<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastrar Serviços</h1>

<div class="input">
<form method="POST" action="insert_servico.php">

        <label>Serviços</label>
        <input  id="input_nome" type="text" name="servico" value="">
<br>
<br>
        <label>Preço:</label>
        <input type="text" name="valor" value="">
<br>
<br>
        <label>Disponibilidade:</label>
        <input type="text" name="dispon" value="">
<br>
<br>
        <label>Desconto:</label>
        <input type="text" name="desconto" value="">
<br>
<br>
        <input type="submit" value="salvar" onclick="valida_nome()">
<br>
<br>    
</body>
</html>