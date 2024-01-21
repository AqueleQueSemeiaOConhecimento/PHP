<?php

    /*
    Nas regras de negócio do nosso código vamos necessitar usar funções
    que permitem verificar qual o conteúdo de uma string.
    Se contém outra string, se ocmeça pela letra X, termina com Y ou quantas letras 'A' tem


    O PHP oferece várias funções para essa finalidade
    */

    $a = 'Esta frase é usada para testes.';

    // str_contains - verificar se uma string existe dentro da outra - retorna true ou false

    // ---------------------------------------
    $b = 'para';

    if(str_contains($a, $b)){
        echo 'sim'; // <<<<
    }  else {
        echo 'não';
    }

    echo '<br>';

    echo str_contains($a, $b) ? 'SIM' : 'NAO';
    echo '<br>';

    // ----------------------------------------

    # str_contains(); é case insensitive



    // Para percebermos se uma string começa ou acaba com uma determinada string
    // Usamos as funções str_ends_with() e str_starts_with()
    // são ambas case sensitive

    $a = 'Esta frase é usada para testes.';

    if(str_starts_with($a, 'E')){
        echo 'sim'; // <<<<
    }
    else {
        echo 'não';
    }
    echo '<br>';

    // ---------------------------------
    if(str_ends_with($a, 'tes.')){
        echo 'Sim'; // <<<<
    }
    else {
        echo 'não'; 
    }

    /*
    Estas funções são destinadas cada uma à sua função específica.
    Contudo, existe uma função que "unifica" todas estas: preg_match()
    Uma vez que recorre aos uso de expressões regulares, veremos em vídeos
    específicos sobre expressões regulares, como alcançar os mesmo resultados.
    */

    echo '<br>';

    $h = 'sTRinG INsaNa';

    echo str_starts_with(strtolower($h), 'stri') ? 'Sim' : 'Não';