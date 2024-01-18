<?php 
    declare(strict_types=1);

    # STRICT TYPING

    // O comportamento do PHP é tentar converter os tipos declarados.

    function falar(string $mensagem){
        echo $mensagem;
    }

    falar('Olá mundo'); // é possível
    falar(2500);        // é possível


    function somar(int $v1, int $v2) {
        return $v1 + $v2;
    }

    echo somar(10,20);  // é possível
    echo somar('a', 'b'); // é possível também!

    /*
    Mas podemos "obrigar" o PHP a seguir a regra estritamente definida.
    */

    // declare(strict_types=1);

    // ------------------------------------------------------------------------------------


    /*
    A partir do PHP 7.1, passou a ser possível usar um tipo de declaração nullable.
    Com isto, além do tipo de valor "normal" que a variável pode ter,
    também pode ter o valor nulo.
    Usamos para isso um prefixo ? antes do tipo de valor
    */

    function falar2(?string $mensagem) {
        echo $mensagem;
    }

    falar2('Oução a minha voz');
    falar(null);  // tabém passa a ser possível

    /*
    Com o PHP 8 aparece a possibilidade de definirmos mais do que um tipo
    para o mesmo argumento. Os tipos podem ser separados por barras verticais.
    */

    function conversar(int|string $mensagem)
    {
        echo $mensagem;
    }

    conversar('Olá mundo');
    conversar(2500);

    // Ou no caso dos tipos de retorno 

    function calcular_quadrado_de(int|float $v1): int|float {
        //return $v1 * $v1;
        return 'João';
    }

    echo calcular_quadrado_de(25);
    echo calcular_quadrado_de('joão');