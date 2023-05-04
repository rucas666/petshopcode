
<?php

session_start();

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$senh = $_POST['senha'];
$email = $_POST['emai'];

//echo $senh.$email;


$sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senh' limit 1";
$resultado_usuario = mysqli_query($conexao, $sql);
$resultado = mysqli_fetch_assoc($resultado_usuario);
 
if($resultado){
    if($resultado['tipouser'] == 1){
        $_SESSION['id'] = $resultado['idusuario'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        header("Location: admin.php");

    } else if($resultado['tipouser'] == 2){
        $_SESSION['id'] = $resultado['idusuario'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        header("Location: secre.php");
    } else {
        $_SESSION['id'] = $resultado['idusuario'];
        $_SESSION['senha'] = $resultado['senha'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        header("Location: cliente.php");
    }
   


}


?>