<?php

    /*
    NUMBER_FORMAT
    Apresenta um número formatada de várias formas.
    
    IMPORTANTE: existe no PHP a função money_format(), mas foi descontinuada
    a partir da versão PHP 7.4. Não deve ser usada em novos projetos
    */

    /*
        A assisnatura desta função é constituída por 4 parâmetros.
        $num                    - O valor que pretendemos formatar.
        $decimals               - O número de casas decimais a apresentar. 
        $dec_point              - O caracter que vai ser apresentado para separar a parte
                                    inteira da parte décimal
        $thousands_sep          - O caracter que irá ser apresentado na separação   
                                    do número de milhares.
    */

    $valor = 100;
    echo number_format($valor, 0, null, null); // vai usar os valores por direito 
    // 100

    echo number_format($valor, 2, ',', null);
    // 100,00
    
    $valor = 100.45;
    echo number_format($valor, 3, ',', null);
    // 100,450

    echo number_format($valor, 1, ',', null);
    // 100,5



    $valor = 123456.758;
    echo number_format($valor, 2, ',', '.');
    // 123.456,76

    // É uma das formas mais indicadas para apresentar valores monetários
    $valor = 125.2;
    echo number_format($valor, 2, ',', null) . ' $';
    // 125,2 $