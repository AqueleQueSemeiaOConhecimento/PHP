<?php 

    // STRSTR

    // Retorna o resto da string a partir de uma ocorrência.

    $a = 'Frase de testes no sistema';
    echo strstr($a, 'de');  // de testes no sistema

    echo strstr($a, 'n');   // no sistema

    /*
    Esta função é case-sensitive
    para usar a mesma função em como case-insensitive, usamos stristr()

    Existe um terceiro parâmetro que permite definir a parte da string
    que pretendemos obter. Por defeito, não usando esse parâmetro, a string
    obtida é o resto da string incluíndo a needle.
    Se usarmos $before_needle = true; vamos obter a parte inicial da string
    até needle, excluindo a needle
    */

    echo strstr($a, 'n', true);
    // Frase de testes