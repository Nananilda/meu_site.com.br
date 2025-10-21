<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contar vogais</title>
</head>
<body>
    <form method="post" action="contar_vogais.php">
        escreva a palavra: <br>
        <input type="text" name="str"><br>
        <input type="submit" href="contar_vogais.php"><br><br>
    </form>
</body>
</html>

<?php
    $str = $_POST['str']??'';
    // a função nativa = preg_math_all. realiza buscas com parâmetro
    $vogais = preg_match_all('/[aeiou]/i', $str);
    echo "total de vogais: $vogais";
?>