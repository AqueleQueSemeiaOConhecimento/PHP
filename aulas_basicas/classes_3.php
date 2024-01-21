<?php 

    // INSTANCIAÇÃO/CONSTRUCT 

    class Humano1
    {
        public $nome = 'João';
        public $apelido = "Ribeiro";

        public function nomeCompleto()
        {
            return $this->nome . ' ' . $this->apelido;
        }
    }

    $homem = new Humano1();
    echo $homem->nomeCompleto(); # João Ribeiro

    /*

        CONTRUCTOR

        O constructor é um método especial dentro de uma classe
        que é sempre executado automaticamente quando é criado um
        objeto a partir de uma classe. Este método é definido de uma forma 
        especial com __ (dois underscores). São chamados métodos mágicos
        porque têm uma execução específica ou automática associada.

    */

    class Humano
    {
        private $nome;
        private $apelido;

        function __construct($n, $a){
            $this->nome = $n;
            $this->apelido = $a;
        }
        
        public function nomeCompleto(){
            return $this->nome . ' ' . $this->apelido;
        }
    }

    $homem2 = new Humano("Matheus", "Araújo");
    $mulher = new Humano("Kurumi", "Tokisaki");

    echo $homem2->nomeCompleto();
    echo $mulher->nomeCompleto();



    # ----------------------------------------------------------------------
    class Cavalo
    {
        private $nome;
        private $peso;
        private $tam_pinto;

        function __construct($name, $wight)
        {
            $this->nome = $name;
            $this->peso = $wight;
        }

        function set_tam_pinto($tam){
            return "O tamanho desse pinto é enorme, são exatamente  $this->tam_pinto $tam metros";
        }
    }

    $Equino = new Cavalo("Raphael", "130");
    echo $Equino->set_tam_pinto(5);