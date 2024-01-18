<?php

    class Operacoes
    {
        // retorna um npumero sorteado entre $min e $max
        static function numeroAleatorio($min, $max){
            return rand($min, $max);
        }

        static function calcularFormula($a, $b){
            // (A x 2) + (B x A)
            return ($a*2) + ($b*$a);
        }

        static function criarUmNome(){
            $nomes = ['Matheus', 'Nicolas', 'Dioneide', 'Kurumi', 'Juci', 'Junior', 'Evelyn', 'Yuri', 'Raphael'];
            $apelidos = ['Pintudo', 'Caga tronco', 'Come bosta', 'Calças cagadas', 'Linguiço', 'Pika'];
            return $nomes[rand(0, count($nomes) -1)] . ' ' . $apelidos[rand(0, count($apelidos) -1)];
        }
    }

    echo Operacoes::criarUmNome();
    echo '<br>';

    echo Operacoes::numeroAleatorio(0, 1000);
    echo '<br>';

    echo Operacoes::calcularFormula(10, 10);
    echo '<br>';