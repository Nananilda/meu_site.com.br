<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minmax</title>
</head>
<body>
    <form method="post">
        <label>Valor a:</label>
        <p><input type="text" name="a" required></p>
        <label>Valor b:</label>
        <p><input type="text" name="b" required></p>
        <label>Valor c:</label>
        <p><input type="text" name="c" required></p>
        <label>Valor d:</label>
        <p><input type="text" name="d" required></p>
        <label>Valor e:</label>
        <p><input type="text" name="e" required></p>
    <button type='submit'>calcular</button>
</body>
</html>

<?php
    $a = $_POST['a']??'';
    $b = $_POST['b']??'';
    $c = $_POST['c']??'';
    $d = $_POST['d']??'';
    $e = $_POST['e']??'';
    $maior = max($a, $b, $c, $d, $e);
    $menor = min($a, $b, $c, $d, $e);
    echo "<br> valores comparados: $a, $b, $c, $d, $e <br>";
    echo "o maior valor é: $maior <br>";
    echo "o menor valor é: $menor";
?>