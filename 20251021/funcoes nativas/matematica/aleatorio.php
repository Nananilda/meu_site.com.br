<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aleatorio</title>
</head>
<body>
    <form method="post">
        <label>De:</label>
        <p><input type="number" name="a" required></p>
        <label>Até:</label>
        <p><input type="nmuber" name="b" required></p>
    <button type='submit'>calcular</button>
</body>
</html>

<?php
    $a = $_POST['a']??'';
    $b = $_POST['b']??'';
    $aleatorio = rand($a, $b);
    echo "o valor é: $aleatorio";
?>