<?php

    # CONSTRUCTOR

    # Olhemos para os exemplos.

    class Humano1
    {
        public $nome;
        public $apelido;
    }

    class Humano2
    {
        public function falar()
        {
            // código aqui...
        }

        private function andar()
        {
            // método apenas acessível dentro da class
        }

        public function movimento(){
            $this->andar();
        }
    }

    /*
        Podemos ter classes sem qualquer tipo de métido e podemos ter
        classes sem qualquer tipo de propriedade.

        Ao instanciar-mos a classe Humano1, podemos aceder diretamente
        às suas propriedades, pelo facto de estarem identificadas com
        o access modifier public

    */

    $homem = new Humano1();
    $homem->nome = "João";
    $homem->apelido = "Ribeiro";

    $mulher = new Humano2();
    $mulher->movimento();

    # ---------------------------------------------------------------------

    /*
        CONSTRUCTOR

        Com o PHP 8 foi introduzido o conceito de Property Promotion
        no construtor. Isto permite definirr propriedades diretamente nos
        parâmetros do construtor. Vajamos um exemplo "antes" e "depois"
    */

    class Human
    {
        public $nome;
        public $apelido;

        function __construct($n, $a)
        {
            $this->nome = $n;
            $this->apelido = $a;
        }
    }

    # No PHP 8 podemos criar a mesma classe da seguinte forma

    class Human2
    {
        function __construct(public $nome, public $apelido)
        {
            $this->nome = $nome;
            $this->apelido = $apelido;
        }
    }

    $h1 = new Human("João", "Ribeiro");
    $h2 = new Human2("Ana", "Martins");

    echo $h1->nome . ' ' . $h1->apelido;
    echo '<br>';
    echo $h2->nome . ' ' . $h2->apelido;

    # IMPORTANTE: Ao contrário do nome das variáveis, o nome das classes
    # é case insensitive.
    $h3 = new human("nome", "apelido");
    echo '<br>';
    echo $h3->nome . ' ' . $h3->apelido;