<?php
include 'connection.php';

try {
    echo '<a href="./index.php">Voltar</a>';
    echo'<br><br>';
    
    $stmt = $pdo->query('SELECT * FROM pessoa');
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        // echo 'ID: ' . $row['id'] . '<br>';
        echo 'Nome: ' . $row['nome'] . '<br>';
        echo 'Idade: ' . $row['idade'] . '<br>';
        echo '<a href="./edit.php?ID_Pessoa=' . $row['ID_Pessoa'] . '">Editar</a>';
        echo '<br>';
        echo '<a href="./delete.php?ID_Pessoa=' . $row['ID_Pessoa'] . '">Excluir</a>';
        echo '<br>';
        echo '--------------------------<br>';
    }
} catch (PDOException $e) {

    echo 'Erro na consulta: ' . $e->getMessage();
}