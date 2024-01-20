<?php

    // EXPLODE e IMPLODE

    /*
    A utilização de arrays como coleções de dados é algo praticamente presente
    em todas as aplicações de PHP. Existem funções de strings também ralacionadas
    com arrays, e estas duas são um exemplo disso.
    */

    // ---------------------------------------------
    // EXPLODE
    /*
    Permite transformar uma string num array de strings, recorrendo a um caracter
    de separação.
    */

    $str_nomes = 'joao, carlos, ana, antônio';
    $nomes = explode(',', $str_nomes);

    // $nomes = ['joao', 'carlos', 'ana', 'antônio'];

    /*
    existe um terceiro parâmetro que, sendo usada, define a quantidade máxima
    de elementos que o array $nomes vai ter. Não sendo especificado, $nomes vai
    conter o número máximo de valores possível.
    */

    $str_nomes = 'joao,carlos,ana,antônio';
    $nomes = explode(',', $str_nomes, 2);

    // $nomes = ['joao', 'carlos,ana,antônio'];

    // se o caracter de separação for vazio, a função retorna false



    // ------------------------------------------------------------------

    // IMPLODE

    /*
    Permite "colar" numa string um conjunto de elementos de um array.
    Para isso usa um caracter de "colagem". Vejamos o exemplo:
    */

    $nomes = ['joao', 'carlos', 'ana', 'antônio'];
    $str_nomes = implode('|', $nomes);

    // $str_nomes = 'joao|carlos|ana|antônio'

    // Em versões anteriores ao PHP 9, podiamos passar o caracter de colagem
    // depois do array (como segundo argumento). A partir do PHP 8 não é
    // permitido usar outra assinatura que não seja esta:
    // Caracter de cikagen e array de valores a colar.

    // NOTA: Existe uma outra função que é alias do implode. É a função join()
    // tem exatamente a mesma assinatura e finalidade do implode.