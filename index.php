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
<section class="removeBlacklist">
    <h1>E-mails na lista de bloqueio</h1>
    <p>Existem alguns motivos que podem levar um e-mail a ser bloqueado...</p>
 
        <form action="delete.php" method="GET" class="removeEmailForm">    
            <input type="email" name="removeEmail" placeholder="E-mail" required>
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
  <tr>
    <td>1</td>
    <td>teste0@email.com</td>
    <td>25/08/2024 23:55</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
  <tr>
    <td>2</td>
    <td>teste1@email.com</td>
    <td>26/08/2024 10:15</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
  <tr>
    <td>3</td>
    <td>teste2@email.com</td>
    <td>26/08/2024 14:30</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
  <tr>
    <td>4</td>
    <td>teste3@email.com</td>
    <td>26/08/2024 16:45</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
  <tr>
    <td>5</td>
    <td>teste4@email.com</td>
    <td>26/08/2024 18:00</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
  <tr>
    <td>6</td>
    <td>teste5@email.com</td>
    <td>26/08/2024 20:20</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
  <tr>
    <td>7</td>
    <td>teste6@email.com</td>
    <td>27/08/2024 09:00</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
  <tr>
    <td>8</td>
    <td>teste7@email.com</td>
    <td>27/08/2024 11:45</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
  <tr>
    <td>9</td>
    <td>teste8@email.com</td>
    <td>27/08/2024 15:20</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
  <tr>
    <td>10</td>
    <td>teste9@email.com</td>
    <td>27/08/2024 19:30</td>
    <td><span class="material-symbols-outlined">delete</span></td>
  </tr>
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
    <script src="script.js"></script>
</body>

</html>