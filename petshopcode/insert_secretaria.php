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
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];
$tipouser = $_POST['tipo'];

$sql = "INSERT INTO usuario ( nome, email, cpf, rg, endereco, telefone, tipouser, senha ) VALUES ( '$nome', '$email', '$cpf', '$rg', '$endereco','$telefone', '$tipouser', '$ss')";
 if (mysqli_query($conexao, $sql)){
echo"Informaçoes armazenadas com sucesso";
header("Location: login.php");
 }
 else{
     echo 'erro';
 }



?>