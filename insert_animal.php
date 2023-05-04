<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$nome = $_POST['nome'];
$tipo = $_POST['tipo'];
$raca = $_POST['raca'];
$tamanho= $_POST['tamanho'];
$peso = $_POST['peso'];
$idade = $_POST['idade'];

$sql = "INSERT INTO animais ( nome, raca, tipo, tamanho, peso, idade ) VALUES ( '$nome', '$raca', '$tipo', '$tamanho', '$peso', '$idade')";
 if (mysqli_query($conexao, $sql)){
echo"Informaçoes armazenadas com sucesso";
header("Location: login.php");
 }
 else{
     echo 'erro';
 }



?>