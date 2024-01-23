<?php
    # FILESYSTEM

    # Vamos aprender a ler dados de um ficheiro, neste caso, linha a linha

    // leitura de dados
    // $ficheiro = fopen('dados.txt', 'r');
    // for($i = 1; $i <= 11; $i++){
    //     echo fgets($ficheiro);
    // }
    // fclose($ficheiro);

    // Na pratica isso esta errado, devemos usar o loop while como no exemplo a seguir:

        $ficheiro = fopen('dados.txt', 'r');
        while(!feof($ficheiro)){
            echo fgets($ficheiro);
        }
        fclose($ficheiro);

      # feof = fill end of file, algo assim