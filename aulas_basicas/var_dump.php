<?php 

    // VAR_DUMP

    /*
    Tem um resultado semelhante ao print_r, mas para além dos valores
    apresenta tambpem a informação sobre o tipo de valores.
    */

    echo '<pre>';
    $nome = "João";
    var_dump($nome);

    echo '<br>';

    $valores = [1,2,3];
    var_dump($valores);