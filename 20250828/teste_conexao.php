<?php
    require "funcoes.php";
    $nome_db = "mongo";
    $msg = banco_dados($nome_db);
    echo $msg;
?>