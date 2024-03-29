<?php

    /*

        STRRPOS

        strrpos - procura a última ocorrência de uma string dentro de outra

        A Haystack é a string onde vamos procurar a posição
        A Needle é a string cuja posição pretendemos obter dentro da string
        Offet é um parâmetro opcional que permite definir a partir de onde é 
        efetuada a pesquisa.

    */

    $a = 'Esta frase serve para testes.';
    $pos = strrpos($a, 'se'); // 11 (seria 8 com a função srtpos)

    # A semelhança de strpos, no PHP 8 a needle tem que ser uma string
    # e se o resultado não existir, passamos a ter um resultado false

    $a = 'Esta frase serve para testes';
    $pos = strrpos($a, 'Esta'); // 0
    echo $pos;
     