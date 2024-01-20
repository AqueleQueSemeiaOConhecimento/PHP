<?php
$host = 'localhost';
$dbname = 'php_crud_simples';
$user = 'root';
$password = '';

try {
    //aqui eu usei postgres então tem o pgsql, tu vai alterar para mysql
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;user=$user;password=$password");
    //echo 'Conexão bem-sucedida! <br>';
    
} catch (PDOException $e) {
    echo 'Erro de conexão: ' . $e->getMessage() . '<br>';
}

