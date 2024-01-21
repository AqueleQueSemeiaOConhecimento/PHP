<?php


    # STRINGS são variáveis muito especiais dentro do PHP.
    # Existem dezenas de funções para tratamento de strings
    # (Veremos mais à frente o que são funções e como criar funções)

    # Por exemplo, podemos apresentar um determinado caracter de uma string
    # da seguinte forma;

    $frase = 'Esta frase tem 29 caracteres';
    $n = '<br>';

    // apresenta o primeiro caracter da frase
    echo $frase[0];
    echo $n;

    // apresenta o sexto caracter da frase
    echo $frase[5];


    # Podemos comparar strings da seguinte forma:
    $a = 'João';
    $b = 'Carlos';

    $c = ($a == $b);     // false
    $d = ($a != $b);     // true



    # Existem muitas funçõs nativas no PHP para operar com strings

    # EXEMPLOS:

    $frase = 'Esta frase tem 29 caracteres.';

    # retornar o número de caracteres da string
    $numero_caraceres_total = strlen($frase);

    # retornas as letras a partir da posição 0 e durante 4 caracteres
    $primeira_palavra = substr($frase, 0, 4);    # Esta

    # converte toda a string em letrar maiúsculas
    $todas_maiusculas = strtoupper($frase);

    # converte todas as letras da string para minúscula
    $todas_minusculas = strtolower($frase);

    # substituir uma letra por outra
    $nova_frase = str_replace('a', 'x', $frase);     # Estx frxse tem 29 cxrxcteres.

    # verifica qual é a posição de um caracter dentro da string
    $posicao = strpos($frase, 'a');   # 3

    // https://www.php/manual/pt_BR/ref.strings.php




    # No PHP 8 foram introduzidas mais algumas funções para usar com strings

    # str_contains()
    $nome = "Ana Maria Silva Cardoso";
    $x = str_contains($nom, 'Silva');      # true


    # str_starts_with()
    $x = str_starts_with($nome, 'Ana');    # true
    $x = str_starts_with($nome, 'ana');    # false


    # str_ends_with()
    $x = str_ends_with($nome, 'oso');      # true
    $x = str_ends_with($nome, ' oso');     # false