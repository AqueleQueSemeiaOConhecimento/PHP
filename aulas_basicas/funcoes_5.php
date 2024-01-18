<?php

    # Uma função nunca pode ser chamada sem que os valores obrigatórios sejam fornecidos

    # Exemplo:

    function funcao($a, $b)
    {
        // código aqui...
    }

    funcao('teste');
    # isto é errado - só foi fornecido o valor de $a

    # Contudo, embora pouco frequente, podemos passar mais argumentos do que o solicitado

    function outra_funcao($a)
    {
        $x = func_get_arg(0);
        $y = func_get_arg(1);
        $z = func_get_arg(2);
        echo "$x - $y - $z";

        echo '<br>';

        echo func_num_args(); # avalia quantos argumentos foram passados para a função.
    }

    outra_funcao(10, 20, 30);

    echo '<br>';

    # também não é muito comum, mas sendo possível, podemos usar um argumento especial
    # designado por variadic parameter
    function minha_funcao(...$argumentos)
    {
        foreach($argumentos as $v){
            echo "$v<br>";
        }
    }

    minha_funcao(10, 20, 30, 40, 50);