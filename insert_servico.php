<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$servico = $_POST['servico'];
$valor = $_POST['valor'];
$disponiblilidade = $_POST['dispon'];
$desconto = $_POST['desconto'];

$sql = "INSERT INTO servico ( servico, valor, disponibilidade, desconto ) VALUES ( '$servico', '$valor', '$disponiblilidade', '$desconto')";
 if (mysqli_query($conexao, $sql)){
echo"Informaçoes armazenadas com sucesso";
header("Location: login.php");
 }
 else{
     echo 'erro';
 }



?>