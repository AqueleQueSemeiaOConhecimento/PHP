<?php

    # NULL COALESCING OPERATOR

    /*
    Com o PHP 7 foi introduzido o Operador de Coalescência de Nulos
    Coalescência significado aglutinação ou junção de items separados.

    Basicamente este operador é um atalho par alguns casos do operador
    condicional ternário.
    Vejamos o exemplo:
    */
    
    $x = null;
    $nome = $x ?? 'Sem nome';

    // Este exemplo é semelhante a:

    $nome1 = isset($x) ? $x : 'Sem nome';

    // Portanto, se x for null, então é atribuido o valor definido
    // à frente dos dois sinais de interrogação.


    /*
    Com o PHP 7.4, foi acrescentado o operador de atribuição a seguir
    ao operar de coalescência.
    Isto permite um cenário ainda mais simples para definir variáveis
    nulas ou sem valor atribuido.
    */

    $apelido = null;
    $apelido ??= 'Apelido Desconhecido.';
    // neste caso apelido = 'Apelido desconhecido'

    echo $nome;
    echo '<br>';
    echo $apelido;