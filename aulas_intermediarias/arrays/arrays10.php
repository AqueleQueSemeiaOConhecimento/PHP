<?php

# ARRAYS - UTILIZAÇÃO DE FILTROS

/*
Podemos usar a função array_filter para aplicar um filtro na seleção de elementos
através de uma função callback.
O que na prática aconteece é um iteração entre todos os valores, aplicando as 
regras da função callback. Se o resultado da função callback for verdadeiro, o valor
é devolvido para o array, caso contrário é ignorado.
Vejamos na prática.
*/

$valores = [1,2,3,4,5,6,7,8,9,10];
$final = array_filter($valores, "");
print_r($final);

function impares($valor)
{
    return $valor % 2 != 0;
}

function pares($valor)
{
    return $valor % 2 == 0;
}

function multiplos_cinco($valor){
    return $valor % 5 == 0;
}