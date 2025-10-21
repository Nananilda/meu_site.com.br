<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>arredondar</title>
</head>
<body>
    <form method="post">
        <label>Valor a:</label>
        <p><input type="text" name="a" required></p>
    <button type='submit'>calcular</button>
</body>
</html>

<?php
    $a = $_POST['a']??'';
    $arredondar = round($a);
    echo "o valor arredondado é: $arredondar";
?>