<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0&icon_names=delete" />
    <title>Lista de bloqueio</title>
</head>
<body>
<section class="emailSearchForm">
    <h1>E-mails na lista de bloqueio</h1>
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
    <th>Data do bloqueio</th>
    <th>Ação</th>
  </tr>
  <?php

  $serv = "localhost";
  $user = "root";
  $pass = "";
  $db = "blacklistdb";

  $db_connection = new mysqli($serv, $user, $pass, $db);

  if ($db_connection->connect_error) {
      die("Conexão falhou: " . $db_connection->connect_error);
  }

  // Consulta para obter os dados
  $sql = "SELECT id, email, data_criacao FROM blacklist_emails";
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

  $db_connection->close();
  ?>
</table>
</section>


<footer>
<div class="pagination">
  <a href="#">〈</a>
  <a href="#" class="active">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a href="#">〉</a>
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