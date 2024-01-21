<?php 

    /*
    O PHP contém uma função muito simples de usar para criar strings com um 
    determinado número de repetições concatenada.
    */

    $a = str_repeat('-', 20);  // "---------------------"

    $b = str_repeat('=|', 20); // "=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|=|"


    /*
    Poderiamos pensar num sistema destes para apresentar linhas com valores do tipo
    ..............100 
    .............2100
    ................0
    ............45790
    */
    # no entanto necessitaríamos de mais lógica de programação.

    # Para resolvermos esta questão, existe a função str_pad();

    $valor = 100; 
                //variavel Xitem item_preencher pad_type 
    echo str_pad($valor, '30', '.', STR_PAD_LEFT); // O quarto parametro se chama pad_type.

    /*
    pad_type:
        STR_PAD_LEFT
        STR_PAD_RIGHT
        STR_PAD_BOTH
    */

    # é uma função particularmente interessante para sistemas de logs
    # onde os caracteres são monospaced.

?>

    <?php 

     $valores = [100,2100,0,45790];
     echo "<pre>";  # Significa apresentar os conteudo a seguir com o mesmo espaço
     foreach($valores as $valor){
        echo str_pad($valor, '30', '.', STR_PAD_LEFT) . PHP_EOL; //  PHP END OF LINE
     }