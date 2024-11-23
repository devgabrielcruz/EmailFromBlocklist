<?php
include 'connection.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "DELETE FROM blacklist_emails WHERE id = ?";
    
    $stmt = $db_connection->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Registro deletado com sucesso!";
    } else {
        echo "Erro ao deletar registro: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "ID não identificado.";
}

$db_connection->close();
?>
