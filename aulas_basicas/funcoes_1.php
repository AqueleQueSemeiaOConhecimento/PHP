<?php

/*

    FUNCTIONS / FUNÇÕES 

    Funções são blocos de código identificados por um nome e uma assinatura
    e que permitem que o código seja reutilizado e organizado de uma forma
    muito mais consistente.

    Estes blocos só são executados quando são solicitados.

    Definimos uma função usando a palabra chave function, seguida de um nome,
    um conjunto de parênteses e um bloco de código.


*/

    # (Forma correta de escrita de uma função)
    function funcao()
    {
        // código da função aqui
    }

    # Exemplo da sua aplicação
    echo 'Início da nossa aplicação.';
    echo '<br>'; 

    function executar()
    {
        echo 'A função foi executada';
    }

    executar();

    # No PHP o nome das funções é case insensitive.
    //function Falar()
    //{

    //}

    //function falar()
    //{

    //}


    # podem ser usados vários padrões para o nome das funções
    # os mais comuns são o camel case e o Snake case
    function camelCase()
    {

    }

    function snake_case()
    {

    }

