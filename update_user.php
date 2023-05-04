<?php 
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$id_usuario = $_POST['idusuaruio'];
$nome = $_POST['nm'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$telefone = $_POST['telefone'];


$sql = "UPDATE usuario SET nome='$nome', email='$email', cpf='$cpf', endereco='$endereco', telefone='$telefone' WHERE idusuario='$id_usuario'";

if (mysqli_query($conexao, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conexao);
}



?>