<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>celsius para fahrenheit</title>
</head>
<form method="post" action="celsius_fahrenheit.php">
    número nem celsius: <br>
    <input type="text" name="c"><br>
    <input type="submit" href="celsius_fahrenheit.php"><br><br>
</form>

<?php
    $c = $_POST['c'];
    $f = ($c*1.8)+32;
    echo "$c C° = $f °F";
?>