<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$nome = $_POST['nm'];
$email = $_POST['emai'];
$ss = $_POST['senh'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];

$sql = "INSERT INTO usuario ( nome, email, cpf, telefone, tipouser, senha ) VALUES ( '$nome', '$email', '$cpf','$telefone', 3, '$ss')";
 if (mysqli_query($conexao, $sql)){
echo"Informaçoes armazenadas com sucesso";
header("Location: login.php");
 }
 else{
     echo 'erro';
 }



?>