<?php

    # TESTANDO VARIÁVEIS

    /*
    Acontece inúmeras vezes no nosso código a necessidade de verificar ou testar 
    a existência de variáveis ou do seu valor.

    Para isso o PHP contém um conjunto de construções internas que nos permitem
    fazer verificação.
    */




    # ISSET

    /*
    Esta construção permite verificar se uma variável está ou não definida
    Ela retorna verdadeiro se a variável existe, e false se não existe.
    */

    $a = 1;
    if(isset($a)){
        echo 'A variavel existe!<br>';
    }
    else{
        echo 'A variavel não existe! <br>';
    }

    /*
    Se tivermos uma variável definida, mas o seu valor for null, é considerada
    como uma variável inexistente.
    */

    $b = null;
    echo isset($b) ? 'Sim' : 'Não';




    # EMPTY

    /*
    Verifica se a variável tem um valor vazio (null, 0, false ou string vazia) e
    retorna verdadeiro ou flaso
    */

    $b = 'joão';
    empty($b); // false

    $c = false;
    empty($c); // true

    $nomes = [];
    empty($nomes); // true

    $outro = null; 
    empty($outro); // true





    # IS_NULL

    /*
    Verifica se uma variável tem valor null ou não
    */

    $k = 'joão';
    is_null($k); // false

    $l = null;
    is_null($l); // true

    /*
    Com o PHP 8 houve uma mudança na forma como o is_null funciona.
    Anteriormente, ao teste com is_null uma variável inexistente,
    era apresentado o resultado verdadeiro com um aviso.

    Com o PHP 8 passa a existir um erro de tipo.
    */

    is_null($m); // erro




    // ---------------------------------------------------------

    # UNSET

    /*
    Permite "destruir" uma variável.
    Existem duas formas de o fazer, mas com ligeiraas diferenças de performance
    e atuação no sistema.
    */

    $x = "João";
    unset($x);

    $v = 'Antônio';
    $v = null;

    /*
    No primeiro caso, a variável é "libertada" e no próximo ciclo de limpeza
    (garbage collector) ela é removida da memória.

    No segundo caso a variável vai persistir na memória, mas sem valor atribuído
    apesar de libertar memória quanto à inexostência de valor.

    Sugere-se a utilização do unset nestes casos.
    */