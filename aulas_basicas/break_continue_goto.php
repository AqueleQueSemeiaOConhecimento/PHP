<?php

    /*

        BREAK, CONTINUE E GOTO

        Existem duas funções especiais dentro dos loops: break e continue

        BREAK 
        serve para interromper a execução de um loop

    */

    for($i = 0; $i < 20; $i++){
        echo $i.'<br';
        if($i==10){
            break; # interrompe o loop
        }
    }

    echo '<hr>';

    $nomes = ['João', 'Ana', 'Carlos'];
    foreach($nomes as $nome){
        echo $nome . '<br>';
        if($nome == 'Ana'){
            break;
        }
    }

    # CONTINUE
    # Permite avançar uma volta do ciclo ignorando o código que deveria ser executado

    for($i = 0; $i < 20; $i++){
        if($i==10){
            continue; # volta à linha inicial do loop
        }
        echo $i.'<br>';
    }

    echo '<hr>';

    $nomes = ['João', 'Ana', 'Carlos'];
    foreach($nomes as $nome){
        if($nome == 'Ana'){
            continue;
        }
        echo $nome . '<br>';
    }

    echo '<hr>';

    /*

        GOTO
        É muito pouco usado porque torna a leitura do código mais complexa.
        Foi introduzido no PHP 5.3 e permite sair do loop e ir para uma linha do código
        definida por um label (nome seguido de :)


    */

    for($i = 0; $i < 20; $i++){
        if($i==10){
            goto teste; # saltar para o label
        }
        echo $i.'<br>';
    }

    echo 'fim do loop';
    
    teste:
    echo 'AQUI!';