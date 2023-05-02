<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body{
        font-family: Verdana;
        background: #5CB3FF;
    }
h1{
    color: #fff;
    text-align: center;
}
.input{
    margin: 0;
    padding: 0;
    text-align: center;
}

a{
 background-color: #33F9FF;
 color:white;
 padding: 5px 5px;
 border-radius: 30px;
 align-items: center;
 text-decoration: none;
 display: inline-block;
 letter-spacing: 2px;
 font-weight: 600;
 margin-top: 10px;
 position: relative;
 width: 10%;
 text-transform: uppercase;
 
}
input[type="submit"]{
 background: #33F9FF;
 color: #fff;
 padding: 5px 5px;
 display: inline-block;
 position: relative;
 text-decoration: none;
 border-radius: 10px;
 align-items: center;
 cursor: pointer;
 text-transform: uppercase;
 letter-spacing: 2px;
 font-weight: 600;
 margin-top: 10px;
}
input[type="submit"]:hover{
    filter: brightness(1.1);
}
label{
    color: #fff;
    text-transform: uppercase;
}

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
<br>
<br>
<br>
<br>
<br>
<div class="input">
    <form method="POST" action="logar.php">
        <label>Email:</label>
        <input type="email" name="emai" value="">
<br>
<br>
        <label>Senha:</label>
        <input type="text" name="senha" value="">
<br>
<br>
        <input type="submit" value="Login">
        <!-- <a href="cadastra.php">Cadastrar</a>-->
    </form>
</div>
</body>
</html>