<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT</title>
</head>
<body>
<h1>Lista de produtos </h1>

<?php
    $produtos = ["banana","salcicha","miojo","caldo kinno","alvejante"];
?>


<select name="produto" id="produto">
    <?php
    foreach ($produtos as $p) {
    ?>
    <option value="<?=  $p;?>"><?=  $p;?> </option>

    <?php
    }
    ?>



</select>

</body>
</html>