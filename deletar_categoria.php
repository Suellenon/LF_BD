<?php
require 'conexoes.php';



if (!isset($_GET['id'])) {
    die("ID da categoria não fornecido.");
}

$id = intval($_GET['id']); // Sanitiza o ID

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Prepara a consulta SQL para excluir a categoria
    $sql = "DELETE FROM categoria WHERE id = ?";
    $stmt = $connect->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Categoria apagada com sucesso!";
    } else {
        echo "Erro ao apagar a categoria: " . $connect->error;
    }

    // Fecha a declaração e a conexão
    $stmt->close();
    $connect->close();
    exit;
}
?>


