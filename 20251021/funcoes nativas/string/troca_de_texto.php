<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minuscula</title>
</head>
<body>
    <form method="post">
        <label>digite uma palavra:</label>
        <p><input type="text" name="a" required></p>
        <br>
    <button type='submit'>enviar</button>
</body>
</html>

<?php
    $a = $_POST['a']??'';
    $b = strtolower($a);
    $novo_a = str_replace("a", "e", $b);
    $novo_b = str_replace("i", "e", $novo_a);
    $novo_c = str_replace("o", "e", $novo_b);
    $novo_u = str_replace("u", "e", $novo_c);
    echo $novo_u;
?>