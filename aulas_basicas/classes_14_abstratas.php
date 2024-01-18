<?php 

    /*
        CLASSES ABSTRATAS

        Uma classe abstrata é constituida por uma implementação parcial
        a partir das quais outras classes podem crescer.

        Quando uma classe é declarada como abstrata, isso significa que ela tem
        método incompleto que, obrigatoriamente têm que ser implementados nas
        classes que a herdam.

        As classes abstratas não podem ser instanciadas. Servem apenas para
        poderem ser herdadas por outras classes.
    */

    abstract class Forma 
    {
        public $largura = 100;
        public $altura = 200;

        abstract public function area();

        function altura()
        {
            return $this->altura;
        }
    }

    // $quadrado = new Forma(); # isto não é permitido

    class Retangulo extends Forma {
        // Para essa classe funcionar tenho que completar o metodo area()
    }

    class Retangulo2 extends Forma{
        public function area() {
            return $this->largura * $this->altura;
        }
    }

    $r = new Retangulo2();
    echo $r->area();
    echo '<br>';
    echo $r->altura();

    /*
    Uma classe abstrata permite uma implementação parcial de método 
    e a definição de um modelo de implementação de outros método.
    Isto permite em modelos de programação orientada a objetos, juntamente com
    outro mecanismo, designado por interfaces, a estruturação do código 
    que segue os melhores padrões de escrita.

    É uma matéria fundamentamente destinada a quem constrói código para ser
    implementado por outros programadores.
    */