<?php

try{
    $pdo = new PDO(
        "mysql:host=localhost;dbname=db_cliente;charset=utf8;user=root;password=0000"
    );
}

catch(PDOException $e){
    echo "Erro de conecão $e";
}