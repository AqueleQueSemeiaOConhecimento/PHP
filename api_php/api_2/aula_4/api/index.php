<?php

// dependencias

require_once('../inc/config.php');
require_once('../inc/api_class.php');

// instanciate the api_classe
$api = new api_class();

$api->send_api_status();

// check the method
// if(!$api->check_method($_SERVER['REQUEST_METHOD'])){
//      $api->api_request_error('Aconteceu um erro na API!!!');
// }

// echo 'ok';









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