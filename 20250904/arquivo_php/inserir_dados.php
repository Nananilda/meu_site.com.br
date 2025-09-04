<?php
    $arquivo = fopen("dados.txt", "a");
    fwrite($arquivo, "primeira linha de texto\n");
    fclose($arquivo);
    echo "arquivo alterado com sucesso";
?>