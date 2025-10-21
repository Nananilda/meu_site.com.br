<?php
    function mdc($a, $b){
        while($b != 0){
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }
    return $a;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>minimo divisor comum</title>
</head>
<body>
    <form method="post">
        <label for="num1">número 1:</label>
        <input type="number" id="num1" name="num1">
        <br><br>
        <label for="num1">número 2:</label>
        <input type="number" id="num2" name="num2">
        <br><br>
        <input type="submit" value="calcular MDC">
        <br><br>
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num1 = intval($_POST['num1']??'');
            $num2 = intval($_POST['num2']??'');
            $resultado = mdc($num1, $num2);
            echo "o MDC de $num1 e $num2 é $resultado";
        }
    ?>
</body>
</html>