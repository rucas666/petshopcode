<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$sql = "SELECT * FROM usuario";
$result = mysqli_query($conexao, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border=1>
        <tr>
            <th>id </th> 
            <th>Nome</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Endereço</th>
            <th>Telefone</th>
            <th>**</th>
            <th>*</th>
        </tr>

<?php if (mysqli_num_rows($result) > 0) { ?>
<?php  while($row = mysqli_fetch_assoc($result)) { ?> 
<tr>
    <td><?php echo $row["idusuario"] ?></td>
    <td><?php echo $row["nome"] ?></td>
    <td><?php echo $row["email"] ?></td>
    <td><?php echo $row["cpf"] ?></td>
    <td><?php echo $row["endereco"] ?></td>
    <td><?php echo $row["telefone"] ?></td>
    <td> <a href="editar_cliente.php?idcliente=<?php echo $row["idusuario"] ?> ">editar </a></td>
    <td> <a href="excluir_cliente.php?idcliente=<?php echo $row["idusuario"] ?> ">excluir </a></td>
</tr>
<?php } ?>
<?php } ?>
    </table>
</body>
</html>