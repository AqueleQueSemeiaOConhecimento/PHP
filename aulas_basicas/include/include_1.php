<?php

    # IMPORTAR SCRIPTS COM INCLUDE

    /*
    A grande maioria dos projetos de programação vão sempre necessitar de 
    ter o seu código "partido" entre diferentes ficheiro. Salvo raras excepções,
    um projeto terá dezenas ou centenzas de ficheiros para que a aplicação funcione.

    É aqui que entram os mecanismos de importação de scripts dentro de outros scripts.

    A importação pode ser feita recorrendo ao uso da instrução include

    NOTA: O include, à semelhança do echo, são construções especiais do PHP e 
    não requerem a utilização de parêntesis
    */



    # Esta instrução vai inserir o código de programação do script config.php dentro
    # do script atual.


    // ------------------------------------------------------------------------------------------------

    include 'config.php';

    echo NOME_APLICACAO;

    # CAMINHO PAR AO INCLUDE

    /*
    Podemos "incluir" um script dentro de outro usando:
    1. Nenhum caminho e apenas o nome script a ser incluido;
    2. Um caminho relativo ao script atual;
    3. um caminho absoluto - que indica a localização exata do script no fylesystem.

    1. Apenas quando o script a incluir está na mesma pasta atual

    2. Caminho relativo à pasta do script atual
    */

    //include 'inc/dados.php';
    //echo '<br>';
    //echo $nome;

    // quabdi becessário "andar para trás" na árvore de pastas usamos ../
    /*
    include '../outro_script.php';
    echo '<br>';
    echo '$valor';
    */

    # 3. O caminho absoluto
    // include 'C:\laragon\www\include_required\1\inc\dados2.php';
    // echo '<br>';
    // echo $hoje->format('d-m-u');