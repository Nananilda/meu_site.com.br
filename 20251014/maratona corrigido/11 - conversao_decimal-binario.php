<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>decimal-binário</title>
</head>
<body>
    <form action="conversao_decimal-binario.php" method="post">
        <label>numero:</label>
        <p><input type="number" name="n" required></p>
        <br>
    <button type='submit'>buscar</button>
</body>
</html>

<?php
    $n = intval($_POST['n']);
    echo decbin($n);
    // decibin = função nativa do php, converte decimal em binário
    // intdiv = divide o número por 2, e ignora o resto da divisão
?>