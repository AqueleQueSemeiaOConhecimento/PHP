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

    // mover o ficheiro par ao destino final
    move_uploaded_file($file['tmp_name'], $pasta_final . $file['name']);

}

/*
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