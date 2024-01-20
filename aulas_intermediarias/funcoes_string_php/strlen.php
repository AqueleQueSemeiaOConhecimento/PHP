<?php

    // COMO CONTAR O NÚMERO DE CARACTERES DE UMA STRING

    /*
    Muitas vezes vamos necessitar calcular o número de caracteres de uma string.
    Com muita frequência recorremos rapidamente ao uso da função strlen
    */

    $a = "Uma frase para teste.";

    $comprimento = strlen($a);  // comprimento = 22
    
    echo strlen($a);   // 22

    // -------------------------------------------
    // quando uma variável é nula ou vazia;
    $b = null;
    $c = '';

    echo strlen($b);  // 0
    echo '<br>';
    echo strlen($c);  // 0

    // ---------------------------------------------
    // quando uma variável é boleana
    $sim = true;
    $nao = false;
    echo strlen($sim); // 1
    echo '<br>';
    echo strlen($nao); // 0

    // ------------------------------------------------
    // quando uma variável é numérica
    $numero = 1250;
    echo strlen($numero); // 4 (conversão implícita)


    // ---------------------------------------------
    // quando uma variável é um array
    $nomes = ['Ana', 'Carlos', 'Miguel'];
    echo strlen($nomes); // gera um erro. Não pode ser usada com arrays. só com strings
                         // para contar numero de elementos em um array usamos o count();

    // ----------------------------------------------
    // problema! Caracteres com acentos
    $f = "João Ribeiro";
    echo strlen($f); // vai apresentar o valor 13, ainda ue só existam 12 caracteres.

    // SOLUÇÃO
    echo mb_strlen($f); // 12 caracteres.