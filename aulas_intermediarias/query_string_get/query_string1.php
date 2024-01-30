<?php

# PASSAR VALORES ENTRE PÁGINAS WEB - VIA GET

/*
De cada vez que fazemos um clique num link, na maior parte dos casos estamos a pedir ao
sistema que vá para outra página. Na prática estamos a executar um request (pedido)
que se traduz num pedido de dados ao servidor onde a nossa página se encontra.

Tradicionalmente, quando fazemos um novo request, os valores das variáveis do PHP
desaparecem e uma nova vida na nossa aplicação surge como resposta ao novo pedido.

Se tivermos a página A onde existe a variável $nome = 'João', quando abrimos a página B,
a variável $nome não existe.

Existem várias formas de passar valores entre duas páginas web (ou dois requests).
Uma das formas mais simples, é através da query string. A query string é o endereço da
nossa página, agregado com um conjunto de informações adicionais. Vejamos na prática.
*/

// query_string é a informação que fica na url

# Podemos pegar a infomação pelo link, exemplo:
/*
    // pagina html
    $nome = 'jarbas';

    <a href="pagina2.php?nome=<?= $nome ?>">Ir para pagina 2</a>
    // esse nome primeiro vai na url,pode ser alterado, e na 
    url vai o valor da variavel $nome
    
    # na pagina2 onde o link leva devemos usar a função de escopo goblal GET
    
    $nome = $_GET['nome'];
*/