<?php

# VAMOS FALAR DE ARRAYS

/*
Já falámos anteriormente sobre arrays. São também conhecidos por vetores,
pilhas, listas, hashtables, etc.

São coleções ordenadas de dados. Essa ordenação é feita através de chaves
que são, na maior parte dos casos do topo string (arrays associativos)
ou do tipo inteiro. Podemos ter, inclusive, array multidimensionais.

Tal como acontece com as variáveis string, os arrays têm, no PHP, um
conjunto muito extenso de funções para a sua manipulação.
Iremos apenas falar das principais para que possamos explorar da melhor
forma estas estruturas.
*/

// a definição de um array pode ser feita de várias formas:
$nomes1 = array('a', 'b', 'c');
$nomes2 = ['a', 'b', 'c'];      // desde o PHP 5.4
$nomes3[] = 'Joao';

print_r($nomes3);


$cliente1 = [
    'nome' => 'carlos',
    'idade'=> 35,
    'profissao'=> 'Advogado'
];

print_r($cliente1);


$cliente2['nome'] = 'Joao';
print_r($cliente2);