<?php

    /*

        ESCOPO E CICLO DE VIDA DE UMA VARIÁVEL

        Normalmente uma variável de PHP passa a existir a partir do local
        onde é iniciada e existe até ao final da página.
        No entanto, quando temos variáveis dentro de uma função, ela têm
        um ciclo de vida limitado.

    */

    $variavel = 10;

    echo "<p>$variavel</p>";

    funcao(20, 30);

    //echo "<p>$a e $b</p>" $ essas variáveis existem dentro da função, mas não existem fora

    function funcao($a, $b)
    {
        //echo "<p>$variavel</p>";  # esta variável não é reconhecida dentro da função
        echo "<p>$a e $b</p>";
    }

    function funcao2()
    {
        $v = 100;
    }

    funcao2();
    echo "<p>$v</p>";


    // ------------------------------------------------------------------------------

    # GLOBAL
    # Neste exemplo, a variável $a existe em dois escopos diferentes
    $a = 10;

    function funcao3()
    {
        global $a;
        $a = 20;
    }

    funcao3();

    echo "<p>$a</p>";

    # ----------------------------------------------------------------------------
    # outro exemplo

    $b = 100;

    function funcao4()
    {
        $b = 200;
        //$GLOBALS['b'] = 200;
    }

    funcao4();
    
    echo "<p>$b</p>";

    # -------------------------------------------------------------------------------

    # ESCOPO E CICLO DE VIDA DE UMA VARIÁVEL

    # Ao contrário de outras linguagens, no PHP, as variáveus definidas
    # dentro de loops ou instruções condicionais, não são destruídas
    # dentro desse escopo.

    if (true) {
        $a = 10;
    }

    echo "<p>$a</p>";

    for ($i = 0; $i < 10; $i++) {
        $x = 1000;
    }

    echo "<p> $i e $x </p>";

    # Existem ainda um outro contexto de escopo de variáveis
    # quando estas são definidas dentro de uma classe,
    # passando a ser designadas por propridades de uma classe.