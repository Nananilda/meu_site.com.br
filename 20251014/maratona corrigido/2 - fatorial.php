<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fatorial</title>
</head>

<?php
    echo "<form method='post'>";
    echo "digite um numero: <input type='number' name='numero' min='0' required><br>";
    echo "<input type='submit' value='calcular fatorial'>";
    echo "</form>";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $num = intval($_POST['numero']);
        $fatorial = 1;
        for ($i = 1; $i <= $num; $i++){
            $fatorial *= $i;
        }
        echo "fatorial de $num é: $fatorial <br>";
    }
?>