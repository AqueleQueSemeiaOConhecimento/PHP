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

// CRUD

// select
$clientes = $gestor->query("SELECT * FROM cliente")->fetchAll(PDO::FETCH_ASSOC);
echo '<pre>';
print_r($clientes);

// insert
// $gestor->query("INSERT INTO cliente (nome_cliente) VALUES ('Francisco')");
// tive que comentar porque se nao a cada vez que eu atualizo a pagina ele adiciona dnv


// update
//$gestor->query("UPDATE cliente SET nome_cliente = 'Arthur' WHERE id_cliente = 9");


// delete
$gestor->query("DELETE FROM cliente WHERE id_cliente = 9");
?>