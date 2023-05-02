
<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";


$conexao = mysqli_connect($servidor, $usuario, $senha);

if($conexao){
    echo("Conexão realizada com sucesso");
}
else{
    echo("falha na conexao" + mysqli_connect_error());
}

$sql = "CREATE DATABASE doghouse";

    if(mysqli_query($conexao, $sql)){
        echo "Banco de dados criado com sucesso";
    }
    else{
        echo "Erro ao criar banco de dados" + mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>