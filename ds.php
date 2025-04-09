<?php
class Car {
  public $color;
  public $model;

  public function __construct($color, $model)
  {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "fusion");
var_dump($myCar); // getting data type
echo "<br>";
echo $myCar->message();
?>