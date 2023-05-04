<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);
$cliente = $_GET["id_animal"];
$sql = "select * from animais where id_animal = '$cliente' ";
$result = mysqli_query($conexao,$sql);

if (mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {
        $id_anaimal = $row["id_animal"];
        $nome = $row["nome"];
        $tipo = $row["tipo"];
        $raca = $row["raca"];
        $tamanho = $row["tamanho"];
        $peso = $row["peso"];
        $idade = $row["idade"];
    }
}   else {
    echo " 0 resultados";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Cadastrar Animais</h1>

<div class="input">
<form method="POST" action="insert_animal.php">

        <label>Nome do Pet:</label>
        <input  id="input_nome" type="text" name="nome" value="">
<br>
<br>
        <label>Tipo:</label>
        <input type="text" name="tipo" value="">
<br>
<br>
        <label>Raça:</label>
        <input type="text" name="raca" value="">
<br>
<br>
        <label>Tamanho:</label>
        <input type="text" name="tamanho" value="">
<br>
<br>
        <label>Peso:</label>
        <input type="text" name="peso" value="">
<br>
<br>        
        <label>Idade:</label>
        <input type="text" name="idade" value="">
<br>
        <input type="submit" value="cadastrar" onclick="valida_nome()">
<br>
<br>    
</body>
</html>