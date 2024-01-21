<?php
include 'connection.php';

try {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['ID_Pessoa'], $_POST['nome'], $_POST['idade'])) {
            $id = $_POST['ID_Pessoa'];
            $nome = $_POST['nome'];
            $idade = $_POST['idade'];

            $stmt = $pdo->prepare('UPDATE pessoa SET nome = :nome, idade = :idade WHERE ID_Pessoa = :id');

            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':nome', $nome);
            $stmt->bindParam(':idade', $idade);

            $stmt->execute();

            echo 'Registro atualizado com sucesso!';
            header('refresh:2; url=get.php');
        } else {
            echo 'Parâmetros inválidos para atualização.';
            header('refresh:5; url=get.php');
        }
    } elseif (isset($_GET['ID_Pessoa'])) {
        $id = $_GET['ID_Pessoa'];

        $stmt = $pdo->prepare('SELECT * FROM pessoa WHERE ID_Pessoa = :id');

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            ?>
            <!DOCTYPE html>
            <html lang="pt-BR">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Editar Registro</title>
            </head>
            <body>
                <h2>Editar Registro</h2>
                <form action="<?=$_SERVER['PHP_SELF']?>" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" value="<?= $row['nome'] ?>" required>
                    <br>

                    <label for="idade">Idade:</label>
                    <input type="number" name="idade" value="<?= $row['idade'] ?>" required>
                    <br>

                    <input type="hidden" name="id" value="<?= $row['ID_Pessoa'] ?>">
                    <input type="submit" value="Atualizar">
                </form>
                <br>
                <a href="./get.php">Voltar para os Registros</a>
            </body>
            </html>
            <?php
        } else {
            echo 'Nenhum registro encontrado para edição.';
            header('refresh:5; url=get.php');
        }
    } else {
        echo 'O parâmetro "ID_Pessoa" não foi fornecido.';
        header('refresh:5; url=get.php');
    }
} catch (PDOException $e) {
    echo 'Erro na edição: ' . $e->getMessage();
    header('refresh:5; url=get.php');
}