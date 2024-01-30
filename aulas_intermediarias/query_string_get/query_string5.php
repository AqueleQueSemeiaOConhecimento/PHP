<?php

# Métodos para contornar ausência de variáveis na query string

/*
Exemplo 1)
Pagina1 - temos o link para pagina2:
<a href="pagina2.php?a=joao">Ir para a página 2</a>

Pagina2 - temos a chamada do metodo GET numa variavel para pegarmos os conteudos pela
url

<?php
    $nome = $_GET['nome'];
?>

Neste exemplo no metodo get da pag2 chamamos por uma variavel chamada ['nome'], mas na 
URL a unica variavel disponivel é a=joao
// Isso gera erro!

Para contornar o erro podemos no inicio da Pagina 2 colocarmos uma condição:
    if(!isset($_GET['nome'])){
        // die()  // morre o codigo aqui
        // exit() // morre o codigo aqui

        header('Location: pagina1.php');
    }

*/