<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$number = $_GET['idcliente'];

$del = "DELETE FROM usuario WHERE idusuario = $number";
mysqli_query($conexao, $del);

include_once ("listac.php");
?>