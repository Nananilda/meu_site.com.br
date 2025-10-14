<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>números primos</title>
</head>

<?php
    for ($n=2; $n <= 50; $n++){
        $primo = true;
        for ($i = 2; $i <= sqrt($n); $i++){
            if ($n % $i == 0){
                $primo = false;
                break;
            }
        }
        if ($primo) echo "$n<br>";
    }
?>