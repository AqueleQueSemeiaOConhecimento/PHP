<?php

define('API_BASE', 'http://localhost/PHP/api_php/api_1/aula_2/api/?option=');


echo '<h3> APLICAÇÃO API </h3><hr>';
$resultado = api_request('status');

echo '<pre>';
print_r($resultado);

function api_request($option)
{
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}