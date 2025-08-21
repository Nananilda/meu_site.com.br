<?php
    //o op || retorna verdadeiro se pelo menos uma das condições for verdadeira
    $feriado = false;
    $FimDeSemana = True; 
    if ($feriado || $FimDeSemana){
        echo 'pode descasar';
    }else{
        echo 'dia útil de trabalho';
    };
?>