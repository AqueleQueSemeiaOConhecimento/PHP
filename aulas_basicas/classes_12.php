<?php

    /*
        STATIC

        A palavra chave static pode ser usada para declarar propriedades e métodos de uma classe
        que podem ser acedidos sem que seja necessário criar um objeto a partir dessa classe.
    */

    class Teste
    {
        // instance members - um membro por cada objeto criado a partir da classe
        public $nome;
        function teste(){
            // código aqui
        }

        // static ou class members - apenas existentes uma vez na classe
        static $idade;
        static function mover(){
            // código aqui
        }
    }

    // Como se fazem as implementações?

    class Operacoes
    {
        static $valor1;
        static $valor2;

        static function adicionar()
        {
            return self::$valor1 + self::$valor2;
            // return Operações::$valor1 + Operações::$valor2; // alternativa
        }

        static function hashAleatoria()
        {
            return rand(0, 1000);
        }
    }

    Operacoes::$valor1 = 10;
    Operacoes::$valor2 = 20;
    echo Operacoes::adicionar();

    echo $hash = Operacoes::hashAleatoria();