<?php 

    /*

        HERANÇA | INHERITANCE

        A herança é o mecanismo através do qual podemos criar classes
        que herdam propriedades e métodos de outra classe.

        A classe inicial a partir da qual outras vão ser criadas, é designada
        por classe base

        Todas as classes que vão herdar propriedades e métodos da classe base
        são designadas por classes derivadas

    */

    # Exemplo (uma classe tradicional):
         

    class Animal
    {
        public $especie;
        public $peso;

        function tipoEspecie(){
            return "Este animal é da espécie {$this->especie}";
        }
    }

    $animal = new Animal();
    $animal->especie = 'Mamíferos';

    echo $animal->tipoEspecie();

    # -------------------------------------------------------------------------------








    # HERANÇA | INHETIRANCE

    # Para herdar uma classe a partir de outra, usamos a expressão extends

    # Exemplo (uma classe base):

    
    class Animais
    {
        public $especie;
        public $peso;

        function tipoEspecie(){
            return "Este animal é da espécie {$this->especie}";
        }
    }

    # Exemplo (uma classe com herança):
    class Mamifero extends Animais
    {
        // não é necessário voltar a definir
        // as propriedades e métodos que já existem na classe base

        // podemos acrescentar outras propriedades e outros metodos
        public $quantidade_perna;
        public $tem_pelo;

        function temQuantasPernas(){
            return "O animal da espécie {$this->especie} tem {$this->quantidade_perna}";
        }
    }

    $mamifero = new Mamifero();
    $mamifero->especie = 'Cavalo';
    $mamifero->quantidade_perna = 4;
    echo $mamifero->temQuantasPernas();

    /*
        EXEMPLO EM PSEUDO-CÓDIGO

        class Veiculo
            > marca
            > ano
            > tipo_de_locomocao

        class Automovel extends Veiculo
            (tem as propriedade e métodos de veiculo)
            > potencia
            > autonomia
            > num_portas

        class Bicicleta extends Veiculo
            (tem as propriedades e métodos de Veiculo)
            > tipo_bicicleta
            > tipo_estrutura
    */