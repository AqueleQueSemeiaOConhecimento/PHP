<?php

    # FILESYSTEM

    /*
    Na leitura de ficheiros de texto, o PHP contém nativamente algumas funções para 
    carregar informação a partir de ficheiros csv.

    Um ficheiro CSV (Comma Separated Values), permite guardar dados em esquema de tabela.
    É muito utilizado na exportação de dados a partir do Excel e de outras aplucações 
    desktop e web. O ficheiro pode conter vários formatos diferentes (dados separados po
    virgulas, ponto e virgula, delimitados por aspas, etc.)

    Vejamos um exemplo:
    */

$file = fopen('documento.csv', 'r');
$max_lines = 1;
while(!feof($file)){
    $l = fgetcsv($file);
    print_r($l);
    if($max_lines-- == 0){
        die('Terminado');
    }
}  
fclose($file);