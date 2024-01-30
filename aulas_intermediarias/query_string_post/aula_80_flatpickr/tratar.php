<?php

$data_nascimento = $_POST['data_nascimento'];

// isso aqui é no caso de lidarmos com apenas 1 data
// $valores = explode(' ',$data_nascimento);
// echo '<pre>';
// print_r($valores);

// echo "Nasci no dia $valores[0] <br> e na hora $valores[1]";


// lidando com range (duas datas, inicio e fim)

$valores  = explode(" to " ,$_POST['data_nascimento']);

$data_inicial = $valores[0];
$data_final = $valores[1];

echo "Minha viagem se inicia no dia $data_inicial e termina no dia $data_final";