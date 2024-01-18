<?php

    /*

        FUNCTION/FUNÇÕES - PARÂMETROS

        Como vimos atrás, uma função tem um nome e um conjunto de parênteses.
        Dentro desses parênteses, nós podemos definir u conjunto de parâmetros (assinatura da função)
        Vejamos o exemplo:

    */

    function adicao($a, $b)
    {
        // código da função aqui...
    }

    /*

        Nesta função adição, temos dois parâmetros $a e $b.
        São duas variáveis em PHP que vão existir dentro da função.
        Os parâmetros permitem passar valores para o interior de uma função quando ela é chamada.
        Os parâmetros são separados por virgulas.

    */

    function adicionar($a, $b)
    {
        echo "$a + $b = " . $a + $b; # no PHP 7 emite um aviso.
        echo '<br>';
        echo "$a + $b = " . ($a + $b);
    }

    adicionar(10,20);

    echo '<br>';

    # no PHP 8 já não são necessários os parênteses nas operações.

    $nomes = ['João', 'Ana', 'Carlos'];

    foreach($nomes as $nome){
        saudacao($nome);
    }

    function saudacao($valor)
    {
        echo "Bom dia, $valor.<br>";
    }

    # Para ser mais preciso, parâmetros é o nome das viriáveis existentes
    # na definição da função.
    # Argumentos são os dados passados quando a função é chamada