<?php 

// ARRAYS - KEY_EXISTS e IN_ARRAY

/*
Quando queremos verificar se um determinado valor ou uma determinada chave existe
dentro de um array, não temos que o percorrer até encontrar o que desejamos.
*/

// key_exists - "pergunta" ao array se ele tem uma determinada chave (key)
$empresa = [
    'administracao' => 'João',
    'secretaria' => 'Ana',
    'contabilista' => 'Carla'
];

if(key_exists('operario', $empresa)){
    echo 'Existe';
} else {
    echo 'Não existe';
}

echo PHP_EOL;

echo key_exists('secretaria', $empresa) === true ? 'Existe' : 'Não existe';

// in_array - verifica se determinado valor existe no array ou não
if(in_array('Ana', $empresa)){
    echo 'O valor existe';
}
else {
    echo 'O valor não existe';
}

echo PHP_EOL;

echo in_array('Ana', $empresa) == true ? 'Ana existe no array' : 'Não existe Ana no array';