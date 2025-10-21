<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>raiz</title>
</head>
<body>
    <form method="post">
        <label>Valor r:</label>
        <p><input type="number" name="r" required></p>
    <button type='submit'>calcular</button>
</body>
</html>

<?php
    $r = $_POST['r']??'';
    $aiz = round(sqrt($r));
    echo "$aiz (valor arredondado)";
?>