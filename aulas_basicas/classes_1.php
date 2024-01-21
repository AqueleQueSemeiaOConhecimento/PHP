<?php

/*

    CLASSES - INTRODUÇÃO A POO (OPP) - PROGRAMAÇÃO ORIENTADA A OBJETOS

    Umas classes é um molde/forma/modelo a partir do qual criamos objetos.
    Exemplo: A classe humano é um modelo para, a partir dela, criarmo um
    conjunto de homens e mulheres, cada um partilhando o mesmo "molde"
    mas com propriedades e funções com valores diferentes.
    Homem e Mulher têm ambos cabelo, mas homem pode ter cabelo escuro
    e a mulher cabelo claro.

    Teoricamente:
    class Humano
        > cabelo
        > genero
        > peso
        > caminhar

    Homem -> Humano
        > cabelo - castanho
        > genero - masculino
        > peso - 75
        > caminhar()

    Mulher -> Humano
        > cabelo - claro
        > genero - feminino
        > peso - 63
        > caminhar()
        > cantar() - pode ter funções adicionais

*/




    /*

        As classes são definidas pela declaração class, o seu nome e o bloco
        de código que contém as suas propriedades e métodos

        Por convensão PSR-1, o nome de uma classe deve ser sempre atribuído
        na forma de StudlyCaps/PascalCase/MixedCase. O corpo deve ser definido
        da seguinte forma


    */

    class Humano
    {
        // propriedades e métodos
    }

    class JogadorFutelo
    {
        // propriedades e métodos
    }

    /*
        O corpo de uma classe contém PROPRIEDADES e MÉTODOS
        PROPRIEDADES - São variáveis que guardam as características do objeto.
        MÉTODOS -São funções que definem o que o objeto pode fazer.

        As propriedades são também conhecidas como fields (campos) ou atributo de uma classe
        No PHP, as propriedades têm que ter um nível de acesso especificado
        Veremos o que isso significa mais à frente
    */

    class FiguraGeometrica
    {
        public $largura, $altura;
        public $x;
        public $y;

        function novaArea($a, $b) {
            return $a * $b;
        }
    }