<?php

echo '<pre>';
print_r($_FILES);
$pasta_final = "c:/Users/d3rr3/OneDrive/Documentos/teste/";

// tratamento dos ficheiros
foreach($_FILES as $file){

    // mover o ficheiro par ao destino final
    move_uploaded_file($file['tmp_name'], $pasta_final . $file['name']);

}