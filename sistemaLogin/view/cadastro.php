<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
<h1>Cadastro</h1>

<?php
    if($_REQUEST){
        if($_REQUEST['sucesso'] == true)
            echo "Você foi cadastrado com sucesso";
    }

?>
<form action="../index.php?classe=Usuarios&metodo=store" method="post">
    <label for="user">
        User:
        <input type="text" name="user" id="user">
    </label>
    
    <label for="pass">
        PassWord:
        <input type="text" name="pass" id="pass">
    </label>

    <input type="submit" value="Cadastrar">
</form>

<br>
<br>
<br>
<br>
<a href="/sistemaLogin/view/login.php">Login</a>

</body>
</html>