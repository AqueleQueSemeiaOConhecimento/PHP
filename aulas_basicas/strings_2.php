<?php

# CARACTERES DE ESCAPE

echo '<p>Este é um parágrafo de HTML.</p>';
echo '<br>';

# Os caracteres de escape são usados apra escrever caracteres especiais,
# como é o caso de alguns símbolos que podem entrar em conflito com o código.

//$frase_1 = 'I'm going to John's party!';
$frase_2 = "I'm going to John's party!";

//$frase_3 = "I'm not sure John "The great" will win this fight.";

# a \ é o simbolo para definir um caracter de escape

$frase_1 = 'I\'m going to John\'s Party!';

$frase_3 = 'I\'m not sure John "The great" will win this fight.';
$frase_3 = "I'm not sure John\"The great\" will win this fight";


# apenas têm o comportamento desejado no terminal.
//echo 'Joao Ribeiro\n\rTeste';
echo "Jao Ribeiro\n\rTeste";




# No PHP 7 foi introduzido o caracter de escape Unicode.
# Permite apresentar caracteres a partir do seu código hexodecimal


# https://www.utf8-chartable.de/

echo "\u{A9}";     # copyright
echo "\u{BC}";     # 1/4
echo "\u{AE}";     # registered trademark


# com HTML entities
# https://dev.w3.org/html5/html-author/charref

echo '<br>';
echo '&copy';
echo '&frac14';
echo '&reg';