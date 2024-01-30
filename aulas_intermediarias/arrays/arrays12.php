<?php

# ARRAYS - ALTERAR VALORES DE UM ARRAY COM ARRAY_MAP

$nomes = [
    'João', 'Ana', 'Carlos'
];

$final = array_map("saudacao", $nomes);
print_r($final);

function saudacao($valor){
    return "Olá $valor";
}

// die()

// $valores = [1,2,3,4,5,6,7,8,9,10];
// print_r(array_map("elevar_ao_quadrado", $valores));

// function elevar_ao_quadrado($valor)
// {
//      return $valor * $valor;
// }