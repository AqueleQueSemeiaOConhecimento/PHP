<?php


// dependences
require_once('./inc/config.php');
require_once('./inc/api_function.php');


// $variaveis = [
//     'nome' => 'joao',
//     'apelido' => 'ribeiro'
// ];


// $results = api_request('status', 'GET', $variaveis);
// $results = api_request('status', 'GET');
// echo '<pre>';
// print_r($results);

// $results = api_request('get_all_clients', 'GET');
// print_r($results);
// echo '<pre>';
// print_r($results);

// -----------------------------------------------------
echo '<h3>Clientes Todos</h3>';
$results  = api_request('get_all_clients', 'GET');
foreach($results['data']['0']['results'] as $client)
{
    echo $client['nome'] . ' - ' . $client['email'] . '<br>';
}

echo '<hr>';

// -----------------------------------------------------
echo '<h3>Clientes Ativos</h3>';
$results  = api_request('get_all_active_clients', 'GET');
foreach($results['data']['0']['results'] as $client)
{
    echo $client['nome'] . ' - ' . $client['email'] . '<br>';
}

echo '<hr>';

// -----------------------------------------------------
echo '<h3>Clientes Inativos</h3>';
$results  = api_request('get_all_inactive_clients', 'GET');
foreach($results['data']['0']['results'] as $client)
{
    echo $client['nome'] . ' - ' . $client['email'] . '<br>';
}

echo '<hr>';



echo '<h3>Produtos</h3>';
$results  = api_request('get_all_products', 'GET');
// echo '<pre>';
// print_r($results);
foreach($results['data']['0']['results'] as $client)
{
    echo $client['produto'] . ' - ' . $client['quantidade'] . '<br>';
}


