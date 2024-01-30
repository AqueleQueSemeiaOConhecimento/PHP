<?php

# PASSAR VALORES ENTRE PÁGINAS WEB - VIA GET

/*
Já vimos anteriormente que a super global $_GET é na realidade um array.
Nesse array, todas as variáveis definidas na query string vão ter o seu nome como key
e o seu valor atribuído.

Exemplo:

index.php?a=100

$_GET['a'] vai resultar na devolução do valor 100

Como fazemos para passar mais do que uma variável
*/

# Exemplo:
// <a href="pagina2.php?nome=joao&apelido=ribeiro"> ir para a página 2</a>

// usamos o e comercial para isso
# &