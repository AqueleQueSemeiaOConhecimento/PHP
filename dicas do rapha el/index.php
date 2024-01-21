<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <a href="./get.php" rel="noopener noreferrer">Ver registros</a>
    <br><br>

    <form action="./post.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>

        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required>
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>
