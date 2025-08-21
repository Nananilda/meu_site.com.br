<?php
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];
    $sinal = $_POST['sinal'];
    $resultado = $valor1 . $sinal . $valor2;
    if($sinal == "*"){
        echo "<br>" . $resultado . " = " . $valor1 * $valor2;
    }
    else if($sinal == "+"){
        echo "<br>" . $resultado . " = " . $valor1 + $valor2;
    }
    else if($sinal == "-"){
        echo "<br>" . $resultado . " = " . $valor1 - $valor2;
    }
    else if($sinal == "/"){
        echo "<br>" . $resultado . " = " . $valor1 / $valor2;
    }   
?>