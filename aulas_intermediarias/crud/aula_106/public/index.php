<?php

require_once '../config.php';


try{
// ligar com o banco de dados
$gestor = new PDO(
    "mysql:host=" . MYSQL_HOST . ";" . 
    "dbname=" . MYSQL_DATABASE . ";charset=utf8",
    MYSQL_USER,
    MYSQL_PASS
);
}
catch(PDOException $e){
    echo "Erro de conexão: " . $e->getMessage();
}

// ver o conteudo em uma tabela
$clientes = $gestor->query("SELECT * FROM cliente")->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($clientes);

echo '<table>';
    echo '<thead>';
        echo '<tr>';
            echo '<td>';
                echo 'ID_Usuario';
            echo '</td>';
            echo '<td>';
                echo 'Nome do Cliente';
            echo '</td>';
        echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
foreach($clientes as $cliente){
    echo '<tr>';
        echo '<td>';
            echo $cliente['id_cliente'];
        echo '</td>';
        echo '<td>';
            echo $cliente['nome_cliente'];
        echo '</td>';
    echo '</tr>';
}    
    echo '</tbody>';
echo '</table>';

// utilização de queries parametrizadas (segurança contra SQL Injection)
$nome_do_cliente = "Jesus";

$comando = //$gestor->query("INSERT INTO cliente (nome_cliente) VALUES (:nome)");
$comando->execute(
    [
       'nome' => $nome_do_cliente
    ]
);