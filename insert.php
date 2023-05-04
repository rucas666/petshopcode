<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "email";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$nome = $_POST['fname'];
$email = $_POST['emai'];
$ss = $_POST['senh'];

$sql = "INSERT INTO conta (id, nome, senha, email ) VALUES (null, '$nome', '$ss', '$email')";
 if (mysqli_query($conexao, $sql)){
echo"Informaçoes armazenadas com sucesso";
header("Location: login.php");
 }
 else{
     echo 'erro';
 }



?>