<?php
session_start();
$topicos = simplexml_load_file("topicos.xml");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Fórum Simples</title>
</head>
<body>
    <h1>Fórum de Discussão</h1>
    <nav>
        <a href="cadastro.php">Cadastrar Usuário</a> |
        <a href="login.php">Login</a> |
        <a href="criar_topico.php">Criar Tópico</a>
    </nav>
    <hr>
    <h2>Tópicos:</h2>
    <ul>
        <?php
        $i = 0;
        foreach ($topicos->topico as $t) {
            echo "<li>
                    <a href='listar.php?id=$i'>" . $t->titulo . "</a>
                  </li>";
            $i++;
        }
        ?>
    </ul>
</body>
</html>
