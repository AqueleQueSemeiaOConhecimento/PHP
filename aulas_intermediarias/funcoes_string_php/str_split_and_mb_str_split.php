<?php

    // STR_SPLIT

    # Permite criar um array de caracteres a partir de uma string.

    $a = "Frase de teste";
    $b = str_split($a);

    echo '<pre>';
    print_r($b);

    /*
    Array
(
    [0] => F
    [1] => r
    [2] => a
    [3] => s
    [4] => e
    [5] =>  
    [6] => d
    [7] => e
    [8] =>  
    [9] => t
    [10] => e
    [11] => s
    [12] => t
    [13] => e
)
    */

    /*
    Podemos usar um segundo argumento, opcional, para definir o número de caracteres
    de cada valor do array criado.
    */

    $a = "Frase de testes";
    $b = str_split($a, 3);

    echo '<pre>';
    print_r($b);

    /*
    Array
(
    [0] => Fra
    [1] => se 
    [2] => de 
    [3] => tes
    [4] => tes
)
    */
    # Aqui cada indice do array armazena até 3 caracteres.

    /*
    IMPORTANTE: Tal como muitas outras funções string do PHP, há que ter
    cuidado com string multibyte (com caracteres acentuados).
    Neste caso podemos usar a função mb_str_split()
    */

    $a = 'É para testar esta operação';
    $b = mb_str_split($a, 3);

    echo '<pre>';
    print_r($b);

    /*
    Array
(
    [0] => É p
    [1] => ara
    [2] =>  te
    [3] => sta
    [4] => r e
    [5] => sta
    [6] =>  op
    [7] => era
    [8] => ção
)
    */
