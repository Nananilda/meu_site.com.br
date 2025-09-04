<h3>lista de atendimento</h3>
<form action="nomes.php" method="post">
    <label> Nome da pessoa: </label>
    <input type="text" name="nome">
    <input type="submit" value="cadastrar">
</form>
<?php
    $nome = $_POST['nome'] ?? '';
    //?? '' aceita em branco
    $arquivo = fopen("nomes.txt", "a");
    fwrite($arquivo, "$nome\n");
    fclose($arquivo);
    echo "<hr>";
    $arquivo2 = fopen("nomes.txt", "r");
    while(!feof($arquivo2)){
        echo fgets($arquivo2) . "<br>";
    }
    fclose($arquivo2);
?>
