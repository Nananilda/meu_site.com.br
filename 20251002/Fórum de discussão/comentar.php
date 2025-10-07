<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $topicos = simplexml_load_file("topicos.xml");
        $id = intval($_POST['id']);
        // id que esta vindo da section
        $comentario = $topicos->topico[$id]->comentarios->addChild("comentario");
        $comentario->addChild("nome", $_POST['nome']);
        $comentario->addChild("mensagem", $_POST['mensagem']);
        $topicos->asXML("topicos.xml");
        header("Location: listar.php");
    }
?>