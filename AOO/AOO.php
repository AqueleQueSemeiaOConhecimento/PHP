<?php

class MyClass{
    public $valor = 'Matheus';

    public function setValor($input){
        $this->valor = $input;
    }

    protected function getValor(){
        return $this->valor;
    }
}

$obj = new MyClass;
$obj->setValor('Nicolas');
echo $obj->getValor();

?>