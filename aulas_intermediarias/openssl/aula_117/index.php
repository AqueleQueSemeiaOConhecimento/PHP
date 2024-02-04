<?php

require_once('./conection.php');

$nome = 'Sherek';
$telefone = '92983492';
$senha = 'abc123';

// inserir dados
//  $inserir = $pdo->query("INSERT INTO clientes (nome, telefone) VALUES 
//     (AES_ENCRYPT('$nome', UNHEX(SHA2('$senha', 512))),
//     AES_ENCRYPT('$telefone', UNHEX(SHA2('$senha', 512))))");


// visualizar resultados no db_cliente
 $resultados = $pdo->query("SELECT 
 AES_DECRYPT(nome, UNHEX(SHA2('$senha', 512))) nome,
 AES_DECRYPT(telefone, UNHEX(SHA2('$senha', 512))) telefone
 FROM clientes
")->fetchAll(PDO::FETCH_ASSOC);

$ver = $pdo->query("SELECT * FROM clientes")->fetchAll(PDO::FETCH_ASSOC);


echo '<pre>';
print_r($resultados);