<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="potencia.php" method="post">
        <label>Valor n:</label>
        <p><input type="number" name="n" required></p>
        <br>
        <label>Valor p:</label>
        <p><input type="number" name="p" required></p>
        <br>
    <button type='submit'>calcular</button>
</body>
</html>

<?php
    $n = $_POST['n']??'';
    $p = $_POST['p']??'';
    echo 'potência: ' . pow($n,$p)
?>