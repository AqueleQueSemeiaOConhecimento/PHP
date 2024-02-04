<?php

echo '<pre>';
print_r($_FILES);
$pasta_final = "c:/Users/d3rr3/OneDrive/Documentos/teste/";

$extensoes_aceitas = ['image/png', 'image/jpeg'];


// tratamento dos ficheiros
foreach($_FILES as $file){

    // verifica se a imagem é do tipo esperado
    if(!in_array($file['type'], $extensoes_aceitas)){
        continue;
    }


    // 8025
    // verifica se o ficheiro tem tamanho físico inferior ou igual a X
    if($file['size'] > 500000) {
    echo 'Erro, tamanho do arquivo excedido';
    continue;       
    }

    // verificar as dimensões do ficheiro
    print_r(getimagesize($file['tmp_name']));
    $dimensoes = getimagesize($file['tmp_name']);
    if($dimensoes[0] > 1024 || $dimensoes[1] > 800) {
        echo 'Erro, imagem com tamanho inferior ao aceitavel';
        continue;
    }

    // mover o ficheiro par ao destino final
    move_uploaded_file($file['tmp_name'], $pasta_final . $file['name']);

}

/*
print_r($_FILE;

[caixa_ficheiro_1] => Array
        (
            [name] => 
            [full_path] => 
            [type] => 
            [tmp_name] => 
            [error] => 4
            [size] => 0
        )
*/

/*
print_r(getimagesize($file['tmp_name']));

Array
(
    [0] => 256
    [1] => 197
    [2] => 2
    [3] => width="256" height="197"
    [bits] => 8
    [channels] => 3
    [mime] => image/jpeg
)
*/