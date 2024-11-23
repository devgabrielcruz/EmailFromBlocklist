<?php
$serv = "localhost";
$user = "root";
$pass = "";
$db = "blacklistdb";

$db_connection = new mysqli($serv, $user, $pass, $db);

if ($db_connection->connect_error) {
    die("Conexão falhou: " . $db_connection->connect_error);
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql_go = "DELETE FROM blacklist_emails WHERE id = $id";

    if ($db_connection->query($sql_go) === TRUE) {
        echo "Registro deletado com sucesso!";
    } else {
        echo "Erro ao deletar registro: " . $db_connection->error;
    }
} else {
    echo "ID não fornecido.";
}

$db_connection->close();
?>
