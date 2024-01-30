<?php 

// ARRAYS - PRIMEIRA E ÚLTIMA CHAVE DE UM ARRAY

// $valores = [1,2,3,4,5];
// $valores ['João', 'Ana', 'Carlos'];
 $valores = [
        'adiministrador' => 'João',
        'contabilista' => 'Carlos',
        'financeiro' => 'Ana' 
];

echo $valores[array_key_first($valores)];
echo PHP_EOL;
echo $valores[array_key_last($valores)];