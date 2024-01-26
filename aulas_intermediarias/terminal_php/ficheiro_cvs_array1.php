<?php

    # FILESYSTEM

    /*
    O PHP permite guardar dados de um array num ficheiro CSV.
    Para isso vamos abrir e fechar um ficheiro da forma usual, mas vamos usar
    a função fputcsv para formatar o nosso array e escrever dentro do ficheiro
    */

    $dados = [
        ['João', 'Programador', 47],
        ['Matheus', 'Não sei', 21],
        ['NIcolas', 'Militar', 20],
        ['Evelyn', 'Desempregada', 22],
        ['Raphael', 'Programador', 22]
    ];

    $f = fopen('dados.csv', 'w');
    foreach($dados as $linha){
        fputcsv($f, $linha);
    }
    fclose($f);