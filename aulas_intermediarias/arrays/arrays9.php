<?php

# ARRAYS - APROVEITAR PARA MISTURAR

/*
Imaginemos um cenário em que temos perguntas de respostas múltipla.
Queremos que as respostam apareção sempre numa posição diferente.
Não interessa por agora como seria o sistema de respost. Apenas
queremos perceber como podemos facilmente apresentar essas respostas
por ordem aleatória
*/

$questao = 'Qual é a capital de Portugal?';

$respostas = [
    'Lisboa',
    'Porto',
    'Coimbra'
];

shuffle($respostas); // embaralha as respostas
print $questao . PHP_EOL;
foreach($respostas as $resposta)
echo " > $repostas" . PHP_EOL;