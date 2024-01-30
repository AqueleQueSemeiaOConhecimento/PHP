<?php

// verificar que tipo de request foi usado
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso negado');
}


// verificar se existe os valores no POST
if(!isset($_POST['usuario'])){
    header('Location: index.html');
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

echo "$usuario <br> $senha";