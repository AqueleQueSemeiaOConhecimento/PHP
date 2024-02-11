<?php

define('API_BASE', 'http://localhost/PHP/api_php/api_1/aula_5/api/?option=');


echo '<h3> APLICAÇÃO API </h3><hr>';


for ($i = 0; $i < 10; $i++) {

    //$resultado = api_request('status');
    $resultado = api_request('random&min=100&max=200');

    // verify is response is ok (succcess)
    if ($resultado['status'] == 'ERROR') {
        die('Occurred one error the call API');
    }

    echo "Valor randômico: " . $resultado['data'] . '<br>';
}

echo 'TERMINADO';

function api_request($option)
{
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}
