<?php


// dependences
require_once('../inc/config.php');
require_once('../inc/api_function.php');
require_once('../inc/api_class.php');


// $variaveis = [
//     'nome' => 'joao',
//     'apelido' => 'ribeiro'
// ];


// $results = api_request('status', 'GET', $variaveis);
$results = api_request('status', 'GET');

echo '<pre>';
print_r($results);
