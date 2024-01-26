<?php

    # UNIX TIMESTAMP

    /*
    Existe um valor numérico muito importante para as linguagens de programação e,
    de um modo especial para as bases de dados, que é o Unix Timestamp.
    Basicamente, o unix timestamp é o total de segundos decorridos desde 1 de janeiro
    de 1970, que é a data que marca o início da era do sistema Unix.
    */

    echo time().PHP_EOL;


    
    // se quisermos o mesmo valor mas em microssegundos, podemos user a seguinte função:
    echo microtime().PHP_EOL;
    echo microtime(true).PHP_EOL;
    