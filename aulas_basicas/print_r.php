<?php

    /*
        APRESENTAÇÃO DE INFORMAÇÕES DE VARIÁVEIS

        O PHP tem 3 funções fundamentais para obtermos informações
        a partir de variáveis do nosso código.
            print_r
            var_dump
            var_export
    */


    // PRINT_R

    /*
    Permite ver dados de uma variável de uma forma simples de ler.
    É frequentemente usada para efeitos de debug.
    */
    echo '<pre>';
    $a = 'João';
    print_r($a);
    echo '<br>';
    $b = [1,2,3];
    print_r($b);