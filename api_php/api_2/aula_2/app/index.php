<?php


// dependences
require_once('../inc/config.php');
require_once('../inc/api_function.php');


$variaveis = [
    'nome' => 'joao',
    'apelido' => 'ribeiro'
];


api_request('status', 'GET', $variaveis);