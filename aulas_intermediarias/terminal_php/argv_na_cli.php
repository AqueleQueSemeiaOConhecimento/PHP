<?php 

    /*

    Vimos no vídeo anterior como podemos upar o PHP para executar operações
    na linha de comando (terminal). Mas será que estamos limitados a executar
    script logo após a instrução PHP? claro que não.
    Podemos passar parâmetros para a execução do script, muito à semelhança do que
    acontece com a maior parte dos sistemas que funcionam como um CLI.

    O caso do composer, por exemplo, ou o caso do GIT.

    Como fazemos isso?

    php script.php argumentos

    Dentro do script.php podemos captar os argumentos usando o array $argv
    (podemos designar por argumento values).
    Trata-se se de um array no qual o indice 0 guarda sempre o nome do script

    php script.php  // $argv[0] = script.php

    php script.php // $argv[0] = script.php
                   // $argv[1] = 100

---------------------------------------------------------------------
    Podemos então ter algo do gênero:
    */ 
?>

<?php
    $argv[1] = 100;

    //[script.php]
    $voltas = isset($argv[1]) ? $argv[1] : 10;
    // $voltas será 10 ou o valor de $argv[1]

    for($i=0; $i <= $voltas; $i++){
        echo $i . PHP_EOL;
    }


    /*

    Se executarmos:
    php script.php
    - vamos apresentar os valores de 0 a 10 no terminal

    php script.php 100
    - vamos apresentar os valores de 0 a 100 no terminal

    */