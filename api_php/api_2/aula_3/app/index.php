<?php


// dependences
require_once('../inc/config.php');
require_once('../inc/api_function.php');


$variaveis = [
    'nome' => 'joao',
    'apelido' => 'ribeiro'
];


$results = api_request('status', 'POST', $variaveis);

echo '<pre>';
print_r($results);
