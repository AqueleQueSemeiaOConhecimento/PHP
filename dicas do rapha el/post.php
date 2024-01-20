<?php

include './connection.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

try {
    $stmt = $pdo->prepare("INSERT INTO pessoa (nome, idade) VALUES (:nome, :idade)");

    $stmt->bindParam(':nome', $nome);
    $stmt->bindParam(':idade', $idade);

    $stmt->execute();

    echo 'Dados inseridos com sucesso!';
    
} catch (PDOException $e) {

    echo 'Erro ao inserir dados: ' . $e->getMessage();
    
}

header('refresh:5; url=index.php');