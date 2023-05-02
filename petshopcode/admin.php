<!DOCTYPE html>
<html lang="en">
<head>
<style>
body{
        font-family: Verdana;
        background-color:#008B8B;
        color: Black;
    }
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Administrador</h1>
<?php

session_start();



if($_SESSION['nome'] != null && $_SESSION['nome'] == ""){
    header("Location: login.php");
}else{
    $nome = $_SESSION['nome'];
    $id = $_SESSION['id'];
    echo "Seja Bem-Vindo!! " . $nome . " " . $id;
    echo"<br>";
    echo "<a href='logout.php'>Sair</a> <br>";
}
?>
    <a href="cadastro.php" > Cadastrar Secretaria </a>
    <br> 
    <a href="cadatrouser.php" > Cadastrar Cliente </a>
    <br>
    <a href="cadastrar_servico.php" > Cadastrar Serviços </a>
</br> 

    </body>
</html>
