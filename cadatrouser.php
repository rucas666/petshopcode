<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastro</h1>

<div class="input">
<form method="POST" action="insert_user.php">
        <label>Nome:</label>
        <input  id="input_nome" type="text" name="nm" value="">
<br>
<br>
        <label>Email:</label>
        <input type="email" name="emai" value="">
<br>
<br>
        <label>Cpf:</label>
        <input type="text" name="cpf" value="">
<br>
<br>
        <label>Telefone:</label>
        <input type="text" name="telefone" value="">
<br>
<br>        
        <label>Senha:</label>
        <input type="password" name="senh" value="">
<br>
        <input type="submit" value="Login" onclick="valida_nome()">
<br>
<br>    
</body>
</html>