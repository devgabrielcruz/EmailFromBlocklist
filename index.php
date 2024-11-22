<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista de bloqueio</title>
</head>
<body>
    <form action="delete.php" method="GET" class="removeEmailForm">
    <h1 class="title-remove">Remover e-mail da lista de bloqueio</h1>
    <p>Adicione o e-mail do paciente para que seja removido da lista de bloqueio.</p>
        <input type="email" id="email" name="email" class="form-remove" placeholder="E-mail" required>
        <button type="submit" class="submit-remove">Excluir</button>
    </form>
    <script src="script.js"></script>
</body>

</html>