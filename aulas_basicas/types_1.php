<?php

    /*
        TYPE DECLARATION

        Quando dissemos que o PHP não é uma linguagem tipificada, isto é, as variáveis
        não tem necessidade de ser definidas com um tipo, não é bem assim.
        É possível especificar claramente que tipo de valor podemos usar para
        paratâmetros de funções, propriedades de classes e tipos de retorno de funções.

        Vejamos no caso de um arrau como parâmetro de uma função:
    */

    function falar(array $mensagem){
        echo $mensagem;
    }

    // falar('João'); // não é possível

    // --------------------------------------------------------------------------
    function conversar (string $mensagem){
        echo $mensagem;
    }

    // aqui vai ser feita uma conversão de inteiro para string;
    conversar(2500);

    //conversar(['a']); // não é possivel

    /*
    As declarações de tipo foram adicionadas na versão 5.1 do PHP e na versão 5.4
    foram acrescentadas mais tipos, como por exemplo o callable.

    Outros tipos apenas forama dicionados na versão 7
    e na versão 8, foi acrescentado o tipo mixed.

    O tipo callabre tem que ser uma função, método ou objeto.
    Podemos, por exemplo, usar uma função anônima.
    */

    $falar = function($mensagem) { echo 'A minha mensagem é : ' . $mensagem; };

    function minha_funcao(callable $funcao, $dados){
        $funcao($dados);
    }

    minha_funcao($falar, 'Esta é a minha mensagem');

    /*

    Tipos bool, int, float e string foram adicionados na versão 7 do PHP
    É contudo necessário ter em conta que o PHP faz conversões de tipos.
    */






    # TYPE DECLARATIONS

    /*
    Tambem é possível atribuir tipos de retorno de dados de uma função.
    */

    function funcao(): array {
        return [
            1,2,3
        ];
    }

    function funcao2(): string {
        return [1,2,3];
    }

    // É uma forma interessante de forçar a construção de código com menos erros.