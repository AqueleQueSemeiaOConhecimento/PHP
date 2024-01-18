<?php

    /*
        VAR keyword

        tem o mesmo comportamento de public, mas apenas existe por retrocompatibilidade
        devido ao código escrito do PHP 5. Não é recomendável usar porque poderá
        em breve passar a ser não suportado
    */

    class Homem
    {
        var $nome, $apelido;
    }

    $eu = new Homem();
    $eu->nome = 'Matheus';
    $eu->apelido = 'Pintudo';

    echo $eu->nome . ' ' . $eu->apelido;


    # ------------------------------------------------------------------------------------------


    /*
        OBJECT ACCESS

        No PHP, um objeto instanciado a partir de um classe
        pode aceder a elementos privados e protegidos de outro objeto
        criado a partir da mesma classe.
        Este comportamento não acontece na maior parte das linguagens de programação.
    */

    class Humano
    {
        private $nome = 'x';

        function setPrivate($objeto, $valor)
        {
            $objeto->nome = $valor;
        }

        function apresentar(){
            echo $this->nome;
        }
    }

    $a = new Humano();
    $b = new Humano();
    $a->setPrivate($b, 'Matheus');

    echo '<br>';
    $a->apresentar();
    echo '<br>';
    $b->apresentar();
    echo '<br>';
    