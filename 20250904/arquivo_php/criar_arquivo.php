<?php
    $arquivo = fopen("dados.txt", "w");
    fwrite($arquivo, "primeira linha de texto\n");
    fclose($arquivo);
    echo "arquivo alterado com sucesso";
?>