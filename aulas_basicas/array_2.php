<?php

    # ARRAY MISTOS (MIXED ARRAYS)

    # É possivel criar um array que combina indices numéricos e strings.
    # Embora não seja de necessidade muito frequente, é possivel da seguinte forma:

    $dados = [
        0 => 10,
        'nome' => 'Antônio',
        'apelido' => 'Silva',
        10 => 10000,
        11 => 'Rua de Lisboa',
        12 => 'Portugal'
    ];

    # uma estrutura deste tipo é mais complexa de gerir
    # devido à mistura de indices e tipos de dados.

    # Para apresentar dados do array, procedemos sempre da mesma forma;

    echo $dados[0];               # 10
    echo $dados['apelido'];       # Silva



    # ARRAYS MULTIDIMENSIONAIS

    # São arrays, numéricos ou associativos, cujos valores são outros arrays.
    $dados = [[10, 20, 30, 40],
             [100, 200, 300, 400],
             [1000, 2000, 3000, 4000]
             ];

    # neste caso, para apresentar-mos valores deste array:

    echo $dados[1][2];
    echo $dados[0][3];

    # podemos ter arrays multidimensionais associativos:

    $cidades = [
        'portugal' => ['Lisboa', 'Porto', 'Coimbra'],
        'brasil' => ['Brasília', 'São Paulo', 'Rio de Janeiro'],
        'espanha' => ['Madrid', 'Barcelona', 'Sevilha']
    ];

    echo $cidades['brasil'][1]; # São Paulo
    echo $cidades['espanha'][0]; # Madrid
    echo $cidades['portugal'][2]; # coimbra

    # Os arrays podem ter mais do que duas dimensões.