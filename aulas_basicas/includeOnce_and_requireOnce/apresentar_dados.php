<?php 

    // É possivel executar uma expressão de retorno dentro de um script importado.

    $paises = require_once 'dados.php';
    echo 'Países';
    echo '<pre>';
    print_r($paises); // print_r imprime o conteudo do array

    // echo 'Países';
    // echo '<hr>';
    // foreach($paises as $pais) {
    //     echo %pais . '<br>';    
    //}