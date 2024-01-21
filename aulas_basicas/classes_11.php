<?php
    /*
        ACESS LEVEL - Aspectos importantes a reter

        Uma boa prática é criar o menor número de propriedades de uma classe como públicas.
        colocar uma propriedade como pública é expor em demasia essa propriedade.
        Um exemplo: imaginem que querem uma propriedade de uma classe seja sempre um número.
    */

    class Humano
    {
        public $idade;
    }

    $eu = new Humano();
    $eu->idade = 'Olá mundo!'; # Isto é possível porque o PHP não é strongly typed

    /*  
        Para definir corretamente este tipo de situaçõs, podemos usar métodos para definir e ir buscar
        os valores das propriedades privadas. Estes métodos permitem garantir que a intergridade
        das propriedades seja mantida.
    */

    class Humano1
    {
        private $idade;
    }

    $eu->idade = 'João'; # Isto não é possível porque a propriedade é privada


    # EXEMPLO:

    class Humano2
    {
        private $idade = 0;

        public function setIdade($valor)
        {
            // verifica se $valor é numérico
            if(is_numeric($valor))
            {
                $this->idade = $valor;
            }
            else
            {
                echo 'Atributo idade deve ser do tipo número e inteiro';
            }
        }

        public function getIdade()
        {
            return $this->idade;
        }
    }

    $pessoa = new Humano2;
    $pessoa->setIdade(19);
    echo $pessoa->getIdade();

    # ------------------------------------------------------------------------------------------

    class Tempo
    {
        private $segundos;

        // -------------------------------------------------
        function setSegundos($valor){
            if(!is_numeric($valor) || $valor < 0){
                $this->segundos = 0;
            }
            else {
                $this->segundos = $valor;
            }
        }

        // --------------------------------------------------
        function getMinutos() {
            return $this->segundos /60;
        }

        // --------------------------------------------------
        function setMinutos($valor) {
            if($valor == 0) {
                $this->segundos = 0;
            }
            else {
                $this->segundos = $valor * 60;
            }
        }
    }