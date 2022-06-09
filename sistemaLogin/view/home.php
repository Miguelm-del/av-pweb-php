<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
</head>
<body>
<?php

if ($_REQUEST) {
    if ($_REQUEST['sucesso'] == true) {
        echo "Você logado com sucesso";
    } else {
        echo "Error ao logar";
        echo "Tente Novamente";
        echo "<a href='/sistemaLogin/view/login.php'>Login</a>";

    }

}

//if ($_REQUEST) {
//    if (isset($_REQUEST['usuarios'])) {
//        foreach ($_REQUEST['usuarios'] as $usuario) {
//            echo $usuario['user'];
//        }
//    }
//}
//?>
<h1>HOME</h1>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque eligendi expedita illo magni maxime minus quis? Accusamus deserunt eaque eius eos illo illum iusto magni necessitatibus, nesciunt, porro totam ut!</p>

