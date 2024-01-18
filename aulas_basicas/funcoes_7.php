<?php 

    /*

        FUNÇÕES ANÔNIMAS

        A partir do PHP 5,3 foram introduzidas as funções anônimas.

        Uma função anônima não tem nome e pode se definidar como o valor
        a atribuir a uma variável.


    */

    $a = function()
    {
        echo '<p> Olá </p>';
    };

    # Importante: Vejam como, neste caso, após a chave de chedo da função
    # tem que surgir um ;

    $a();

    # ----------------------------------------------------------------------
    # outro exemplo

    $falar = function($mensagem)
    {
        echo "<p> Eu digo: $mensagem </p>";
    };

    $falar("Estou aqui!");







    # -------------------------------------------------------------------
    # e ainda outro exemplo

    $andar = function($metros)
    {
        return "antei $metros metros";
    };
    echo $andar(100);








    # --------------------------------------------------------------------------
    # As funções anônimas são particularmente úteis quando
    # as queremos passar como argumentos para uma função.

    $a = function()
    {
        return '<p>Função A</p>';
    };

    function falar($x){
        echo $x;
    }

    falar($a()); 
