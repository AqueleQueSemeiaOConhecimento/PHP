<?php
include 'connection.php';

try {
    if (isset($_GET['ID_Pessoa'])) {
        $id = $_GET['ID_Pessoa'];

        $stmt = $pdo->prepare('DELETE FROM pessoa WHERE ID_Pessoa = :id');

        $stmt->bindParam(':id', $id);

        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            echo 'Registro excluído com sucesso!';
        } else {
            echo 'Nenhum registro encontrado para exclusão.';
        }
    } else {
        echo 'O parâmetro "id" não foi fornecido.';
    }
} catch (PDOException $e) {
    echo 'Erro na exclusão: ' . $e->getMessage();
}

header('Location: ./get.php');
exit();

