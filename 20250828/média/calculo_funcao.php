<?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    function media($n1, $n2, $n3){
        $media2 = ($n1 + $n2 +$n3)/3;
        $media2 = round($media2, 2);
        return $media2;
    }
    echo "<strong>o resultado da média é</strong>: " . media($n1, $n2, $n3);
    echo "<br><em>os números foram</em> $n1, $n2 e $n3";

?>