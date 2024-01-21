<?php

# STRINGS

# Umas string é uma série de caracteres que podem ser guardados numa variável.
# Podemos definir uma string como sendo um conjunto de letras, espaços, símbolos e algarismos que
# normalmente designamos por texto.

# Em PHP, as strings podem ser deliminadas por
# aspas simples ' (single quoto)
# aspas duplas " (double quoto)

$a = 'Esta é uma string';
$b = "Esta é outra string";

echo $a;
echo "<br>";
echo $b;

# Nas PSRs não existe uma orientação definida. Devemos ser consistentes ao longo do nosso código.




# CONCATENAÇÃO DE STRINGS
# É o processo que, através do código, permite juntar várias strings.
# Existem dois operadores de concatenação:

# . 
# .= 

$a = 'João' . ' ' . 'Ribeiro';     # o ponto liga as diferentes strings

$b = 'João';
$b .= ' ' . 'Ribeiro';             # .= faz uma concatenação com o valor já existente na string

echo $b;
die();             // die(); diz que quando isso for encontrado no script o codigo para.


$nome = 'João';
$apelido = 'Ribeiro';
$nome_completo = $nome . ' ' . $apelido;

echo $nome_completo;
die();





# a diferença entre strings delimitadas por ' e por " é que, no segundo caso,
# podemos fazer o seguinte:

$nome = 'João';
$apelido = 'Ribeiro';
$nome_completo = "$nome $apelido";

echo $nome_completo;

# Ao contrário das ", nas strings ' as variáveis não são interpretadas
# relativamente ao seu valor (Parse)






# HEREDOC e NOWDOC (outras formas de delimitação)
# Apesar de não serem muito comuns, podem ser usadas para tratamento de maiores blocos de texto.

# HEREDOC - Permite fazer o parse de variáveis

$cliente = 'João Ribeiro';
$email = 'joao.ribeiro@gmail.com';

$texto = <<<LABEL
Olá, sr. $cliente.
Serve a presente mensagem para informar que se encontra inscrito no próximo concurso.
Enviamos o regulamento para o seu email $email
Obrigado pela sua simpatia.
LABEL;

echo $texto;

die();





# NOWDOC - Não permite parse de variáveis
$texto = <<<'LABEL'
Olá, sr. $cliente.
Serve a presente mensagem para informar que se encontra inscrito no próximo concurso.
Enviamos o regulamento para o seu email $email
Obrigado pela sua simpatia.
LABEL;

echo $texto;