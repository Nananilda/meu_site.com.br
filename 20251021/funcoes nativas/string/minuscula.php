<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minuscula</title>
</head>
<body>
    <form method="post">
        <label>digite a frase:</label>
        <p><input type="text" name="a" required></p>
        <br>
    <button type='submit'>transformar</button>
</body>
</html>

<?php
    $a = $_POST['a']??'';
    echo "a frase: $a vai ficar assim: " . strtolower($a) . " em minuscula";
?>