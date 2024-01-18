<?php

    # EXPRESSÃO MATCH

    # No PHP 8 foi introduzida uma nova expressão condicional designada por Match
    # É muito semelhante ao Switch, mas com uma sintaxe mais concisa

    # --------------------------------------------------------------------
    # com switch
    $x = 10;
    switch ($x) {
        case 5:
            echo 'Parou no 5';
            break;
        
        case 10:
            echo 'Parou no 10';
            break;
        
        case 15:
            echo 'Parou no 15';
            break;
        
        default:
        echo 'É um número diferente de 5, 10 ou 15';
        break;
    }

    echo '<hr>';

    # ----------------------------------------------------------------
    # com match
    echo match($x) {
        5 => 'parou no 5',
        10 => 'parou no 10',
        15 => 'parou no 15',
        default => 'é um número diferente de 5, 10 ou 15'
    };

    # No match apenas uma expressão é válida por cada condição.
    # E é possível executar a mesma operação para várias condições

    $x = 10;
    $opcao = match($x) {
        2 => 'é 2',
        4, 5, 6 => 'é 4, 5, ou 6',
        default => 'é outro valor'
    };


    # no switch também é possivel
    $x = 10;
    switch($x) {
        case 2:
            $opcao = 'é 2';
            break;
        case 4:
        case 5:
        case 6:
            $opcao = 'é 4, 5 ou 6';
            break;

        default:
            $opcao = 'é outro valor';
            break;
    }

    /*
        IMPORTANTE
        no Switch, as comparações podem ser feitas só por valor (==)
        no caso do Match, são sempre feitas por valor e tipo (===)
    */

    echo '<hr>';

    $x = '1';

    switch ($x) {
        case 1:
            echo 'inteiro';
            break;
        case '1':
            echo 'string';
            break;
    }
    # inteiro

    echo '<hr>';

    echo match($x) {
        1 => 'inteiro',
        '1' => 'string'
    };