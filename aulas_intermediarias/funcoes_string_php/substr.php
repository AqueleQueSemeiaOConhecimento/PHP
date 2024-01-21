<?php

    // SUBSTR

    /*
    A função substr (substring) é usada com muita frequência para capturarmos
    uma parte de uma string, seja para criar uma nova variável ou simplesmente
    para apresentar uma parte de uma string. Acontece que esta função tem muito 
    mais nuances do que habitualmente estamos habituados a usar.
    */

    $a = 'Esta frase é para testes.';
    $b = substr($a, 5, 10);    // $b = 'frase é p';

    /*
    Se verificarmos o que aconteceu, a variavel b apenas ficou com 9 caracteres
    e não com os 10 a partir da posição 5.
    Mais uma vez teremos que usar a versão multibytes - mb_substr()
    Independentemente desse por menor, as assinaturas são identicas.

    A primeira é a string relativamente a qual pretendemo obter uma parte
    A segunda é o indice a partir do qual pretendemos captar uma parte da string
    A terceira define o número de caracteres a capturar a partir do índice
    */

    $c = mb_substr($a, 5, 10);    // $b = 'frase é pa';
    $d = mb_substr($a, 10);       // 'é para testea.'; PEGA TUDO APARTIR DO 10 INDICE

    /*
    Se usarmos o índice com um valor negativo, então vamos pedir à função
    que extraia a partir do fim.
    */

    $e = mb_substr($a, -4, 2);  // 'te'
    // Aqui ele pega os ultimos 4 caracteres que seria tes., entao de tras para frente ele conta o 2, ficando o te

    $f = substr($a, -3); // 'es.'
    // Aqui ele pega literalmente os ultimos 3 caracteres



    /*
    Podemos também usar o terceiro parâmetro com um valor negativo.
    Neste caso, será captada a parte da string a partir do índice, mas
    excluindo o número de caracteres no final equivalente ao valor negativo.
    */

    $a = 'abcdefghijklmnop';
    $g = substr($a, 8, -3); // 'ijklm'
    // anda até o 8(i) e retira 3(nop)

    /*
    Esta função devolve a string, no caso de não existir um erro.
    Antes da versão 8 do PHP, devolvia um valor false em caso de erro.
    Agora passa a devolver uma string vazia.
    */

    $a = 'adc';
    $b = substr($a, 5);

    // anterior ao PHP 8:
    echo (int)$b; // 0(ou falso)

    // com o PHP 8
    echo $b; // ' '