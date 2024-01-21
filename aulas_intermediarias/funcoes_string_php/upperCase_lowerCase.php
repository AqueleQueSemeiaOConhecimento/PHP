<?php 

    // MAIÚSUCULAS E MINÚSCULAS

    // O PHP contém algumas funções para transformar as strings

    $a = 'joao ribeiro';
    $b = 'ANA CAROLINA';
    $c = 'Francisco Santos';

    // ---------------------------------------------------
    // strtoupper - transforma uma string para maiúsculas

    echo strtoupper($a); // JOAO RIBEIRO
    echo strtoupper($c); // FRANCISCO SANTOS

    $a = 'João Luís';
    echo mb_strtoupper($a); // JOÃO LUÍS - as funções mb_* são designadas po
                            // funções multibyte e estão relacionadas com os sistemas de
                            // codificação de caracteres.
                            // É necessário ter ativo o módulo mbstring

    // --------------------------------------------------------------------------

    // strtolower - trasforma uma string em minúscula
    echo strtolower($b);   // ana carolina
    echo strtolower($c);   // francisco santos

    // de igual modo, existe a função mb_strtolower() para resolver as
    // questões dos caracteres acentuados

    echo ucfirst("joão luís");   //João luís
    echo ucfirst('índice');      //índice

    // --------------------------------------------------
    // lcfirst - transforma a primeira letra de uma string numa letra minúscula
    echo lcfirst("João Ribeiro");   // joão Ribeiro

    // -------------------------------------------
    // ucwords - transfirna todas as primeiras letras de cada palavra numa string em maiúsculas.
    echo ucwords('joão ribeiro');  // João Ribeiro