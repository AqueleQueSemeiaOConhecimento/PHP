<?php

    # FUNÇÕES CLOSURE

    # São funções anônimas que podem usar variáveis do escopo global

    $x = 20;
    $y = 30;

    $minha_closure = function($z) use($x, $y)
    {
        echo "$z - $x - $y";
        $y += 1000; # esta intrução não vai alterar o valor de $y
    };

    $minha_closure(10);
    echo "<p>$y</p>";  # o valor de $y não foi anterado na closure



    # -------------------------------------------------------------
    /*


        ARROW FUNCTIONS

        São funções anônimas escritas de uma forma mais suscinta
        Foram introduzidas no PHP 7.4.
        Suportam as mesmas características de uma função CLOSURE,
        com a diferença que capturam automaticamente as variáveis globais.
    */

    $x = 20;
    $y = 30;

    $minha_funcao = fn($z) => "$x - $y - $z";

    echo $minha_funcao(10);

    # usam a palavra reservada fn e não necessitam do return nem das chaves/chavetas  