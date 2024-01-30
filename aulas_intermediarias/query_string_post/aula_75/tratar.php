<?php

$user = $_POST['usuario'];
$senha = $_POST['senha'];

// verifica se é um post
if($_SERVER['REQUEST_METHOD'] != 'POST'){
    die('Acesso Negado');
}

// verifica se existe usuario e senha
if(empty($user) || empty($senha)){
    header('Location: index.html');
}



// verificar os dados de login
if($_POST['usuario'] != 'Matheus' || $_POST['senha'] != '123'){
    echo 'Login invalido';
    exit();
}

// verificar se a checkbox está ativa
if(!isset($_POST['check_aceitar'])){
    echo 'Por favor ative a opção de aceitação das condições.';
    exit();
}

echo 'Bem vindo';