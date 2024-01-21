<?php

    // trim
    // remove espaços e outros caracteres do início e do final de uma string

    $a = " isto é uma string.     ";


    // ----------------------------

    $a = trim($a); // "isto é uma string."


    // ----------------------------

    $b = trim ($a); // $a = " isto é uma string.     "
                    // $b = "isto é uma string."

    // --------------------------------
    echo trim($a); // apresenta o texto sem espaços no início e no fim.

    // -----------------------------------
    // ltrim e rtrim
    // removem espaços e outros caracteres do início ou do fim da string

    echo ltrim($a); // "isto é uma string.   ";

    echo rtrim($a); // "   isto é uma string.";

    // ----------------------------------------
    $a = "abcdef";
    echo trim($a, 'a');        // "bcdef"
    echo trim($a, 'af');       // "bcde"
    echo trim($a, 'abef');     // "cd"

    // --------------------------------------
    // por exemplo, apesar de existirem outras formas, podemos "limpar" o $_POST
    $usuario = trim($_POST['usuario']);

    // Não usem nas senhas. Elas podem conter propositadamente um espaço!

?>