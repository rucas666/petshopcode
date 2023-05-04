<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$number = $_GET['id_animal'];

$del = "DELETE FROM animais WHERE id_animal = $number";
mysqli_query($conexao, $del);

include_once ("lista_animais.php");
?>