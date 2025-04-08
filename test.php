<?php

$list = [];
$x = 5; // global scope
$y = 4;
$color = 'Red';

function myTest() {
  static $m = 0;
  $name = "Carlos"; // local scope
  global $x, $y;

  echo $m;
  echo "<br>";
  $m++;
  echo "<br>";
  echo $y = $x + $y;
  echo "<p> Hello $name from my test function </p>";
}

myTest();

echo "My car is " . $color . "<br>";
echo "number $x <br>"; // double quotes
echo 'number ' . $x . '<br>'; // single quotes
echo $x + $y;
echo "<br>";
var_dump($y);

array_push($list, "carlos", "firulais");
echo "<br>";
print_r($list);

myTest();


?>