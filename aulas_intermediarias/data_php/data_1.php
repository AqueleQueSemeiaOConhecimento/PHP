<?php

# DATA E HORA
/*
A utilização de datas e horas numa aplicação é fundamental e praticamente sempre 
presente em todos os projetos. No PHP existe a possibilidade de usarmos algumas
funções mais antigas para apresentaç~çao de datas e horas, ou utilizar uma 
metodologia mais próxima da programação orientada a objetos com a classe DateTime

Vamos ver um exemplo simples de apresentação de uma data formatada.
Neste caso, iremos sempre usar a data do sistema.
*/

echo 'Empresa  (c) ' . date('Y');
echo '<br>';

echo 'Empresa (c) ' . date('d/m/Y');
echo '<br>';

echo 'Empresa (c) ' . date('d-m-Y');
echo '<br>';

echo 'Empresa (c) ' . date('D/m/Y') . PHP_EOL;

// Mais usado para trabalhar com banco de dados é:
echo 'Empresa (c) ' . date('Y-m-d H:i:s');

/*
    Y = ano = 2024
    y = ano = 24
    d = dia = 24
    D = dia = Quarta
    m = mês = 01
    H = hora = 11
    i = minutos = 32
    s = segundos = 56
*/