<?php 

    /*

        OVERRIDING

        O mecanismo de overriding permite a uma classe derivada
        ter métodos reescritos especificamente para essa classe.

        Por exemplo, podemos ter um método TESTE na classe base
        e ter o mesmo método TESTE com código diferente na classe derivada
    */


    class Animal
    {
        function mover(){
            echo 'Mover a partir da classe base.';
        }
    }

    class Mamifero extends Animal{

    }

    class Peixe extends Animal{

        function mover(){
            echo 'Mover a partir da classe peixe.';
        }
    }

    $animal = new Animal();
    echo $animal->mover();
    echo '<br>';

    $mamifero = new Mamifero();
    echo $mamifero->mover();
    echo '<br>';

    $peixe = new Peixe();
    echo $peixe->mover();


    // Esse sistema também é aplicável às propriedades.

    class Animal2
    {
        public $especie = 'Ave';
    }

    class Mamifero2 extends Animal2
    {
        public $especie = 'Cavalo';
    }

    $a = new Animal2();
    echo $a->especie;
    echo '<br>';

    $b = new Mamifero2();
    echo $b->especie;

    /*
        Para além do conceito de classe base e classe derivada,
        temos o conceito de parent class (classe pai)
        É a classe a partir da qual fazemos a derivação
    */

    // Vamos ver um exemplo com o construtor desse tipo de classes

    class Rectangulo
    {
        public $largura, $altura;
        function __construct($l, $a)
        {
                $this->largura = $l;
                $this->altura = $a;
        }

        function calculaArea(){
            return $this->largura * $this->altura;
        }
    }


    class Quadrado extends Rectangulo
    {
        function __construct($l)
        {
            $this->largura = $l;
            $this->altura = $l;
        }
    }

    $rect = new Rectangulo(10,20);
    $quad = new Quadrado(10);

    echo $rect->calculaArea();
    echo '<br>';

    echo $quad->calculaArea();
    echo '<br>';

    # mas podemos chamar o construtor da class base usando a expressão parent

    class Quadrado1 extends Rectangulo
    {
        function __construct($l)
        {
            parent::__construct($l, $l);
        }
    }

    $quad1 = new Quadrado1(5);
    echo $quad1->calculaArea();

    // A expressão parent é um nome alternativo ao nome da classe base
    // Podemos também fazer da seguinte forma:

        class Quadrado2 extends Rectangulo
        {
            function __construct($l)
            {
                Rectangulo::__construct($l, $l);
            }
        }