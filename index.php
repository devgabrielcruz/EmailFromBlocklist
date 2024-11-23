<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=delete" />
    <title>Lista de Bloqueio</title>
</head>
<body>
<section class="emailSearchForm">
    <h1>E-mails na Lista de Bloqueio</h1>
    <p>Existem alguns motivos que podem levar um e-mail a ser bloqueado...</p>

    <form action="" method="GET" class="emailSearchForm">
        <input type="email" name="searchEmail" placeholder="Buscar endereço de e-mail" required>
        <button type="submit" class="button">Buscar</button>
    </form>
</section>

<section class="searchResults">
    <table id="customers">
        <tr>
            <th># ID</th>
            <th>E-mail</th>
            <th>Data do Bloqueio</th>
            <th>Ação</th>
        </tr>
        <?php
        include 'connection.php';

        // Paginação
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1;
        $limit = 10; // Número de registros por página
        $offset = ($page - 1) * $limit;

        // Filtro por e-mail
        $searchEmail = isset($_GET['searchEmail']) ? $db_connection->real_escape_string($_GET['searchEmail']) : '';
        $whereClause = !empty($searchEmail) ? "WHERE email LIKE '%$searchEmail%'" : '';

        // Consulta com paginação e filtro
        $sql = "SELECT id, email, data_criacao FROM blacklist_emails $whereClause LIMIT $limit OFFSET $offset";
        $result = $db_connection->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['data_criacao']}</td>
                        <td><span class='material-symbols-outlined' onclick='deleteEmail({$row['id']})'>delete</span></td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Nenhum registro encontrado</td></tr>";
        }

        // Total de registros para a paginação
        $sql_count = "SELECT COUNT(*) as total FROM blacklist_emails $whereClause";
        $result_count = $db_connection->query($sql_count);
        $total_records = $result_count->fetch_assoc()['total'];
        $total_pages = ceil($total_records / $limit);

        $db_connection->close();
        ?>
    </table>
</section>

<footer>
    <div class="pagination">
        <?php
        // Exibir setas para navegação
        if ($page > 1) {
            echo "<a href='?page=" . ($page - 1) . "&searchEmail=$searchEmail'>〈</a>";
        }

        // Exibir páginas anteriores e seguintes (no máximo 5 páginas)
        $start_page = max(1, $page - 2); // Começar 2 páginas antes da atual
        $end_page = min($total_pages, $page + 2); // Limitar a 2 páginas após a atual

        for ($i = $start_page; $i <= $end_page; $i++) {
            $activeClass = $page == $i ? 'active' : '';
            echo "<a href='?page=$i&searchEmail=$searchEmail' class='$activeClass'>$i</a>";
        }

        // Exibir setas de navegação para a próxima página
        if ($page < $total_pages) {
            echo "<a href='?page=" . ($page + 1) . "&searchEmail=$searchEmail'>〉</a>";
        }
        ?>
    </div>
</footer>

<script>
    function deleteEmail(id) {
        if (confirm("Deseja remover este e-mail da lista de bloqueio?")) {
            fetch(`delete.php?id=${id}`, { method: 'GET' })
                .then(response => response.text())
                .then(data => {
                    alert(data);
                    location.reload();
                })
                .catch(error => console.error('Erro:', error));
        }
    }
</script>

</body>
</html>
