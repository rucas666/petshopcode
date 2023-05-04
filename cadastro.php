<!DOCTYPE html>
<html lang="en">
<head>
    <style>
body{
        font-family: Verdana;
        background-color:#F5FFFA;
        color: Black;
    }
h1{
    text-align: center;
}
.input{
    text-align: center;
}
p{
    margin: 300px 0px;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro secretaria</title>
</head>

<script>
    function valida_nome() {
        var filter_nome = /^([a-zA-Zà-úÀ-Ú]|\s+)+$/;
        if (!filter_nome.test(document.getElementById("input_nome").value)) {
            document.getElementById("input_nome").value = '';
            document.getElementById("input_nome").placeholder = "Nome inválido";
            document.getElementById("input_nome").style.borderColor = "#ff0000";
            document.getElementById("input_nome").style.outline = "#ff0000";
            document.getElementById("input_nome").focus();
            document.getElementById("input_nome").onkeydown = function keydown_nome() {
                document.getElementById("input_nome").placeholder = "";
                document.getElementById("input_nome").style.borderColor = "#999999";
                document.getElementById("input_nome").style.outline = null;
            }
            return false;
        } else {
            document.getElementById("input_nome").value = '';
            document.getElementById("input_nome").placeholder = "Nome Válido";
        }
        return true;
    }
</script>

<body>
    <h1>Cadastro</h1>

<div class="input">
<form method="POST" action="insert_secretaria.php">
        <label>Nome:</label>
        

        <input  id="input_nome" type="text" name="fname" value="">
<br>
<br>
        <label>Email:</label>
        <input type="email" name="emai" value="">
<br>
<br>
        <label>Cpf:</label>
        <input type="text" name="cpf" value="">
<br>
<br>
        <label>Endereço:</label>
        <input type="text" name="endereco" value="">
<br>
<br>
        <label>Telefone:</label>
        <input type="text" name="telefone" value="">
<br>
<br>    
        <label>tipouser:</label>
        <select name="tipo"> 
            <option value='1'> administrador </option>
            <option value='2'> secretaria </option>
        </select>
       
<br>
<br>
        <label>Senha:</label>
        <input type="password" name="senh" value="">
<br>
        <input type="submit" value="Login" onclick="valida_nome()">
    </form>

    
</div>
</body>
</html>