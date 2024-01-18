<?php

/*

    TRAITS

    São um grupo de métodos que podem ser inseridos dentro de classes.
    Foram adicionados à linguagem na sua versão 5.4 para aumentar
    a reutilização de código.

    Os traits são definidos com a expressão trait, seguido pelo nome e por um bloco
    de código. As regras para dar nomes a traits são as mesmas que usamos nas classes.

*/

    trait MinhasHabilidades
    {
        public function falar($mensagem){
            echo 'Eu digo:' . ' ' . $mensagem;
        }

        public function saltar($metros){
            echo "Eu salto $metros metros";
        }
    }

    # As classes que necesssitarem de usar estes métodos do trait, apenas terão
    # que ter o seguinte:

    class Humano
    {
        use MinhasHabilidades;
    }

    $h = new Humano();
    $h->falar('Olá Mundo!');
    echo '<br>';
    $h->saltar(3);
    echo '<br>';

    class Nicolas extends Humano
    {

    }

    $h2 = new Nicolas();
    $h2->falar('Sopa de macaco');
    echo '<br>';
    $h2->saltar(8);