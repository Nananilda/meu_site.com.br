<?php
    $valor = $_POST['valor'];
    $i = 1;
    do{
        $resultado = ($valor * $i);
        echo "$valor x $i = $resultado <br>";
        $i++;
    }while ($i <=10);
?>