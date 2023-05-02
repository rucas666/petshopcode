<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "doghouse";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$sql = "SELECT * FROM animais";
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
            <th>Tipo</th>
            <th>Raça</th>
            <th>Tamanho</th>
            <th>Peso</th>
            <th>Idade</th>
            <th>**</th>
            <th>**</th>
        </tr>

<?php if (mysqli_num_rows($result) > 0) { ?>
<?php  while($row = mysqli_fetch_assoc($result)) { ?> 
<tr>
    <td><?php echo $row["id_animal"] ?></td>
    <td><?php echo $row["nome"] ?></td>
    <td><?php echo $row["tipo"] ?></td>
    <td><?php echo $row["raca"] ?></td>
    <td><?php echo $row["tamanho"] ?></td>
    <td><?php echo $row["peso"] ?></td>
    <td><?php echo $row["idade"] ?></td>
    <td> <a href="editar_animais.php?id_animal=<?php echo $row["id_animal"] ?> ">editar </a></td>
    <td> <a href="excluir_animais.php?id_animal=<?php echo $row["id_animal"] ?> ">excluir </a></td>
</tr>
<?php } ?>
<?php } ?>
    </table>
</body>
</html>