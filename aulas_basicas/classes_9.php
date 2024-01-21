<?php

    /*
        ACCES LEVES - NÍVEIS DE ACESSO

        Existem 3 tipos de níveis de acesso a elementos dentro de uma class.
        public, protected e private
    */

    class MinhaClasse
    {
        public $v1;
        protected $v;
        private $v3;
    }

    $a = new MinhaClasse();
    $a->v1 = '111';      # possível.
    $a->v2 = '222';      # não é possível. Resultado em erro.
    $a->v2 = '333';      # não é possível. Resultado em erro.

    /*
        Porquê?

        PUBLIC

        Os membros públicos (propriedades ou métodos) de uma classe, estão sempre acessíveis.
        Se criarmos um objeto a partir da classe, temos acesso direto a esses elementos.
    */

    class TudoPublico
    {
        public $propriedade;

        public function metodo()
        {
            echo 'Método público';
        }
    }

    $ob1 = new TudoPublico();
    $obs1->propriedade = 'a';
    echo $ob1->metodo();


    // ---------------------------------------------------------------------------------------------------------

    /*
        PROTECT

        Um elemento protected pode ser alcançado dentro da classe
        e dentro de uma qualquer classe que seja uma extensão de outra classe
    */

    class ClasseTeste
    {
        public $publica = 'a';
        protected $protegida = 'b';
        private $privada = 'c';
    }

    class ClasseDerivada extends ClasseTeste
    {
        function teste()
        {
            echo $this->publica;      # possível
            echo $this->protegida;    # possível
            echo $this->privada;      # erro
        }
    }

    $classTeste = new ClasseTeste();
    $classTeste->publica = '1';      # possível
    $classTeste->protegida = '2';    # gera erro
    $classTeste->privada = '3';      # gera erro

    $classDerivada = new ClasseDerivada();
    $classDerivada->publica = 'a';      # possível
    $classDerivada->protegida = 'b';    # gera erro
    $classDerivada->privada = 'c';      # gera erro

    $classDerivada->teste(); // vai ser mostrado public e protected.


    # ------------------------------------------------------------------------------------------------------

    /*
        PRIVATE

        Só pode ser visivel dentro da própria classe.
        Não é visível nos objetos instanciados nem noutras classes herdadas.

        Ao contrário das propriedades, os métodos não necessitam de ter 
        um nível de acesso especificado claramente. Se não for identificado,
        por defeito o método é público
    */

    class Teste{
        function mover(){
            // código aqui
        }
    }

    $a = new Teste();
    $a->mover();  # possível