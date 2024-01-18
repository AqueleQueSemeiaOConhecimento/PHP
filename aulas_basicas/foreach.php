<?php

/*

    CICLOS/LOOPS 

    FOREACH

    É um ciclo especialmente concebido para fazer uma iteração
    pelos valores de um array


    */

    $nomes = ['João', 'Ana', 'Carlos'];
    foreach($nomes as $nomes){
        echo $nome . '<br>';
    }

    echo '<hr>';

    # Existe ainda uma outra assinatura que permite ir buscar
    # a chave e o valor do array
    $capitais = [
        'portugal' => 'Lisboa',
        'brasil' => 'Brasília',
        'espanha' => 'Madrid'
    ];
    foreach($capitais as $key => $value){
        echo "Para o país $key a capital é $value <br>";
    }