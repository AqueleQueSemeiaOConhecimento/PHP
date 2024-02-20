<?php

// dependencias

require_once('../inc/config.php');
require_once('../inc/api_response.php');
require_once('../inc/api_logic.php');

// -------------------------------------------------------------
// instanciate the api_classe
$api = new api_response();

// -------------------------------------------------------------
// check if method is valid
if(!$api->check_method($_SERVER['REQUEST_METHOD']))
{
    $api->api_request_error('Invalid request method');
}

// -------------------------------------------------------------
// set request method
$api->set_method($_SERVER['REQUEST_METHOD']);
$params = null;
if($api->get_method() == 'GET')
{
    $api->set_endpoint($_GET['endpoint']);
    $params = $_GET;
}   
else if($api->get_method() == 'POST')
{
    $api->set_endpoint($_POST['endpoint']);
    $params = $_POST;
}


// -------------------------------------------------------------
// prepare the api logic
$api_logic = new api_logic($api->get_endpoint(), $params);

// -------------------------------------------------------------
// check if endpoint exists
if(!$api_logic->endpoint_exists())
{
    $api->api_request_error('Inexistent endpoint: ' . $api->get_endpoint());
}

// -------------------------------------------------------------

// request to the api_logic
$result = $api_logic->{$api->get_endpoint()};
$api->add_do_data('data', $result);





// // resposta temporária
// header("Content-Type:application/json");

// $data['status'] = 'SUCCESS';
// $data['method'] = $_SERVER['REQUEST_METHOD'];

// // apresentar as variaveis que vieram no pedido (get ou post)
// if($data['method'] == 'GET'){
//     $data['data'] = $_GET;
// }   else if($data['method'] == 'POST'){
//     $data['data'] = $_POST;
// }

// echo json_encode($data);