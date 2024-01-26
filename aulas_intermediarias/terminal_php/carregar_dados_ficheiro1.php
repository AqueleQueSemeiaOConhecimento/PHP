<?php

    # FILESYSTEM

    // Podemos carregar todos os dados de um ficheiro de texto para um array diretamente
    // usando a função file(). Vamos ver um exemplo:

    $paises = file(dirname(__FILE__).'/paises.txt', FILE_SKIP_EMPTY_LINES|FILE_IGNORE_NEW_LINES);
    print_r($paises);