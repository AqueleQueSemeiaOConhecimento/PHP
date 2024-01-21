<?php

    /*
        CONSTANTES MÁGICAS

        As constantes mágicas são 8 e são designadas assim porque 
        o seu valor varia automaticamente dependendo onbde estão a ser usadas.
        Vamos perceber como funcionam.
    */

    echo __LINE__ . '<br>'; # indica o número da linha de código no script.

    echo __FILE__ . '<br>'; # identifica o caminho completo do script. 

    echo __DIR__ . '<br>'; # identifica a pasta onde o script está alojado.

    teste();
    function teste(){
        $a = true;
        echo __FUNCTION__ . '<br>';   # indica o nome da função
    }

    class MinhaClasse
    {
        function identificar(){
            echo __CLASS__ . '<br>';  # indica o nome da classe
            echo __METHOD__ . '<br>';  # indica o nome do método
        }
    }

    $a = new MinhaClasse();
    $a->identificar();

    # __TRAIT__ está relacionado com um mecanismo de reutlização de código.

    echo __NAMESPACE__; # indica o nome do namespace atual.