<?php
// exibe as informações do usuário e do servidor
    echo "<h2>informações de acesso</h2>";
    
    $ip = $_SERVER['REMOTE_ADDR']; // IP do usuário
    $navegador = $_SERVER['HTTP_USER_AGENT']; // navegador e sistema operacional
    $servidor = gethostname(); // nome do servidor
    $versaoPHP = phpversion(); // versão do PHP instalada

    echo "Ip do usuário: $ip <br>";
    echo "Navegador: $navegador <br>";
    echo "Servidor: $servidor <br>";
    echo "Versão do PHP: $versaoPHP <br>";

?>