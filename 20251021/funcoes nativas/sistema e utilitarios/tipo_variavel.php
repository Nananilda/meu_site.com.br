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
        <p><input type="text" name="t" required></p>
        <label>digite um número:</label>
        <p><input type="number" name="n" required></p>
        <br>
    <button type='submit'>enviar</button>
</body>
</html>

<?php
    $numero = $_POST['n']??'';
    $numeri_inteiro = (int)$numero;
    $texto = $_POST['t']??'';
    echo "<br> $numero é: ". gettype($numeri_inteiro); // saída: integer
    echo "<br>";
    echo "$texto é: " . gettype($texto); // saída: string
?>