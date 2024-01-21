<?php

    // PRINT

    /*
    O print é uma construção da linguagem PHP muito semelhante ao echo.
    As principais diferenças são?
        1. print apenas aceita um argumento
        2. print retorna sempre o valor 1
    */

    $nome = 'João';
    $apelido = 'Ribeiro';

    print "$nome $apelido<br>"; // valido

    print $nome . ' ' . $apelido . '<br>';  // tambem é válido

    // print $nome, ' ', $apelido; // inválido

    if(print($nome)){
        print(" $apelido");
    }


    // tal como acontece no echo, podemos usar o print para
    // apresentar resultador de uma função

    print '<br>';
    print strlen("Ribeiro");   // 7

    // Preferencialmente devemos usar o echo, por ser mais rápido.
    // O echo permite sintaxe mais curta no html

?>

<p><?php echo "João" ?></p>
<p><?= "João" ?></p>
<p><?php print "João" ?></p>