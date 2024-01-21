<?php

    /*


        FUNCTION / FUNÇÕES 

        PARÂMETROS OPCIONAIS

        Podemos criar funções que têm parâmetros com um valor pré definido.
        A chamada dessas funções não obriga a definir argumentos para esses parâmetros.


    */

    function multiplicar($a, $b = 2)
    {
        /*
            Código aqui

            $a será o valor passado por argumento
            $b será:
                O valor do argumento se ele for passado na chamada
                O valor 2 se não for passado o argumento
        */

        echo $a * $b;
    }

    multiplicar(10); // $a = 10 e $b = 2
    echo '<br>';

    multiplicar(10,20); // $a = 10 e $b = 20
    echo '<hr>';

    # Os parâmetros opcionias têm que ser definidos após os parâmetros não opcionais.
    function dividir($a = 2, $b)
    {
        echo "$a e $b";
    }

    dividir(2,10);

    # No PHP 7 ainda era possível fazer isto sem avisos, mas no PHP 8, aparecerá uma aviso.