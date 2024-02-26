<?php


// dependences
require_once('./inc/config.php');
require_once('./inc/api_function.php');


// $variaveis = [
//     'nome' => 'joao',
//     'apelido' => 'ribeiro'
// ];


// $results = api_request('status', 'GET', $variaveis);
$results = api_request('status', 'GET');
echo '<pre>';
print_r($results);

$results = api_request('get_all_clients', 'GET');
print_r($results);

