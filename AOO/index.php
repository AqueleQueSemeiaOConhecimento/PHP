<?php
class MyClass
{
  public $prop1 = "Sou uma propriedade de classe!";

  # Controi isso
  public function __construct()
  {
      echo 'A classe "', __CLASS__, '" foi instanciada!<br />';
  }

  # Destroi a class
  public function __destruct()
  {
      echo 'A classe "', __CLASS__, '" foi destruída.<br />';
  }

  # Converte para string a propriedade pelo metodo getProperty
  public function __toString()
  {
      echo "Usando o método toString: ";
      return $this->getProperty();
  }

  # Mudo o valor de prop1
  public function setProperty($newval)
  {
      $this->prop1 = $newval;
  }

  # Pego a propiedade
  public function getProperty()
  {
      return $this->prop1 . "<br />";
  }
}




    // Herança

// class MyOtherClass extends MyClass
// {
//     public function __construct()
//     {
//         echo "Um novo construtor em " . __CLASS__ . ".<br />";
//     }
//     public function newMethod()
//     {
//         echo "De um novo método na classe " . __CLASS__ . ".<br />";
//     }
// }
// // Cria um novo objeto 
// $newobj = new MyOtherClass;

// // Usa o método da nova classe 
// echo $newobj->newMethod();

// // Usa um método da classe pai 
// echo $newobj->getProperty();

class MyOtherClass extends MyClass
{
  public function __construct()
  {
      parent::__construct(); // Invoca o construtor da classe pai 
      echo "Um novo construtor em " . __CLASS__ . ".<br />";
  }
  public function newMethod()
  {
      echo "De um novo método na classe " . __CLASS__ . ".<br />";
  }
}
// Cria um novo objeto 
$newobj = new MyOtherClass;
// Usa o método da nova classe 
echo $newobj->newMethod();
// Usa um método da classe pai 
echo $newobj->getProperty();




?>