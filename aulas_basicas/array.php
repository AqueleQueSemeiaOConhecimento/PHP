<?php

    # ARRAYS

    # Um array (traduzido para PT é uma matriz) é na realidade um coleção de valores.
    # Funciona como uma variável, mas pode coner muitos valores "arrumados" para cada um o seu espaço.
    # Esse "espaço" é designado por índice do array.

    # Resumindo, um array é uma coleção constituída por chaves/índices e valores.
    # as chaves/índices podem ser númericos (array númerico) ou strings (array associativo)
    # e podem até coexistir os dois típos de índices no array.
    # Os valores podem ser de qualquer tipo, inclusive serem outros arrays


    # EXEMPLOS

    $valores = array(1,2,3,10,20,30);
    $nomes = array("João", "Ana", "Carlos");

    # a partir do PHP 5.4 passou a ser possivel escrever os arrays de forma mais simplificada
    $valores = [1,2,3,10,20,30];
    $nomes = ["João", "Ana", "Carlos"];

    # Estes arays são de índice numérico.
    # Para apresentar um dos seus valores, procedemos da seguinte forma:
        echo $valores[0];
        echo $nomes[1];  

    # NUNCA ESQUECER QUE OS ARRAYS TÊM ÍNDICE DE BASE 0

    # não têm obrigatoriamente de ter chaves sequenciais
    $dados = [
        10 => 1000,
        20 => 2000,
        30 => 3000
    ];

    # se adicionarmos um novo elemento no final da coleção, ele vai assumir o último índice + 1
    $dados[] = 4000; # $dado[31];



    # Sempre que queremos apresentar um valor de um array, usamos o seu índice.
    # Da mesma forma, podemos alterar o valor do array usando o seu índice,

    $valores = [10,20,30];

    $valores[1] = 2000; # $valores = [10,2000,30];

    # podemos também ignorar o índice para adicionar um novo elemento ao array
    $valores[] = 3000; # $valores = [10,2000,30,3000];

    # ou de outra forma... 
    array_push($valores, 5000); # $valores = [10, 2000, 30, 3000, 5000];

    # para apresentar valores de um array numa string, podemos fazer da seguinte forma:
    echo 'Os valores são: ' . $valores[0] . ' e ' . $valores[1];
    # ou
    echo "Os valores são: $valores[0] e valores[1]";


    # ARRAYS ASSOCIATIVOS

    # ao contrário dos arrays numéricos, as chaves são do tipo string

    $dados = [
        'A' => 20,
        'B' => 30,
        'C' => 40,
        'D' => 50,
        'E' => 60
    ];

    # ou

    $dados = [
        'nome' => 'João',
        'email' => 'joao@gmail.com',
        'nacionalidade' => 'Portugal',
        'telefone' => '9999999999'
    ];

    # Da mesma forma que nos arrays numéricos não devem existir duas chaves iguais,
    # nos associativos também não.
    # na apresentação não é gerado nenhum erro. O valor a ser definido é sempre o último.
    $dados = [
        'nome' => 'João',
        'nome' => 'Carlos'
    ];

    echo $dados['nome'];