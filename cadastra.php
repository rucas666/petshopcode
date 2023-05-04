<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body{
        font-family: Verdana;
        background-color:#F5FFFA;
        color: black;
    }
h1{
    text-align: center;
}
.input{
    text-align: center;
}
p{
    margin: 300px 0px;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Faça o Seu Cadastro Para Entrar No</h1>
    <h1>Nosso Site!</h1>

<div class="input">
    <form method="POST" action="insert.php">
        <label>Nome:</label>
        <input type="text" name="nm" value="">
<br>
<br>
        <label>Senha:</label>
        <input type="text" name="senh" value="">
<br>
<br>
        <input type="submit" value="Login">
    </form>

    
</div>
</body>
</html>