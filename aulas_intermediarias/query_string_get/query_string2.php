<?php

// PASSAR VALORES ENTRE PÁGINAS WEB - VIA GET

/*
Através da query string podemos passar valores, como vimos no vídeo anterior.
No entanto, uma vez que é muito fácil adulterar a query string, não podemos correr 
o risco de tentar capturar uma variável que não existe.

E se quisermos verificar se determinanda variável existe na query string?

Vejamos.
*/

# Pagina1 - temos o link pra Pagina2 e no link temos 
// <a href="pagina2?nome=joao"> Pagina2 </a>

# Pagina2 - recebemos a variavel pelo metodo get
// $nome = isset($_GET['nome']) ? $_GET['nome'] : '' ;
