<?php

$dados = [
    'nome' => ['João'],
    'email' => ['joao@gmail.com'],
    'nacionalidade' => ['Portugal'],
    'telefone' => ['9999999999']];

    foreach($dados as $key => $values) {
        echo "Para o campo $key o valor é: ";
        foreach($values as $value) {
            echo "$value ";
        }
        echo "<br>";
    }

    echo $dados['nome'][1] = 'Matheus';
 

