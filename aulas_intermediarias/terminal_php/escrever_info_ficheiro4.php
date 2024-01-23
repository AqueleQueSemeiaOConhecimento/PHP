<?php 
    
    # FILESYSTEM

    /*
    Porquê utilizar os handles/apontadores?
    Vamos fazer um exercicio simples: ler os dados de um ficheiro e guardar noutro.
    */

    // Criar os dois ponteiros
    $origem = fopen(dirname(__FILE__) . '/dados.txt', 'r');
    $destino = fopen('dados_finais.txt', 'w');

    // lê da origem e grava no destino
    while(!feof($origem)){
        echo fwrite($destino, fgets($origem));
    }

    // Fecha os dois handles
    fclose($origem);
    fclose($destino);