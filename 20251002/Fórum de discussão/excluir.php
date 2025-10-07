<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        echo "Você precisa estar logado.";
        exit;
    }
    $topicos = simplexml_load_file("topicos.xml");
    $id = intval($_GET['id']);
    // usa get pois quando0 a página é chamada ela é chamada ela pega o id da mensagem que vai apagar
    $comentario_id = intval($_GET['comentario']);
    if ($_SESSION['usuario'] == $topicos->topico[$id]->autor) {
        unset($topicos->topico[$id]->comentarios->comentario[$comentario_id]);
        $topicos->asXML("topicos.xml");
    }
    header("Location: listar.php");
?>