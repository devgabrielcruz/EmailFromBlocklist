<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Lista de bloqueio</title>
</head>
<body>

<main class="removeBlacklist">
    <h1 class="title-remove">Remover e-mail da lista de bloqueio</h1>
    <p>Adicione o e-mail do paciente para que seja removido da lista de bloqueio.</p>

    <div class="flex">
        <form action="delete.php" method="GET" class="removeEmailForm">    
            <input type="email" name="removeEmail" placeholder="E-mail" required>
            <button type="submit" class="button">Filtrar</button>
        </form>
    </div>
</main> 

    <script src="script.js"></script>
</body>

</html>