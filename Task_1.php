<?php
class Car {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The car is {$this->name} and the color is {$this->color}."; 
  }
}


class Toyota extends Car {
  public function message() {
    echo "Am I a car or a motorbike? "; 
  }
}

$toyota = new Toyota("Toyota", "blue");
$toyota->message();
$toyota->intro();
?>
 