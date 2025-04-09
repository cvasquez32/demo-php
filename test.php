<?php

$list = [];
$x = 5; // global scope
$y = 4;
$color = 'Red';
$list = array("PHP", "JavaScript", "Python", "SWIFT");
$name = "carlos";
$hello = "Hello World";

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

print_r($list);
echo "<br>";
echo strlen("Hello world!"); // get length of string
echo "<br>";
echo strpos("Hello world!", "Hello"); // function that searches for a specific text within a string;
echo "<br>";
echo strtoupper($name); // returns string in upper case
echo "<br>";
echo strtolower($name); // returns string in lower case
echo "<br>";
echo str_replace("World", "Mundo", $hello); // replace some characters with some other characters in a string;
echo "<br>";
echo strrev($name); // reverses a string
echo "<br>";
echo trim($hello); // removes any whitespaces from the beginning or the end
echo "<br>";
$convertStringToArray = explode(" ", $hello); // splits a string into an array
print_r($convertStringToArray);
echo "<br>";
$concateTwoStrings = $name . $color; // concatenate strings
echo $concateTwoStrings;
echo "<br>";
$newString = "$name $hello"; // another way to concate a string but this time the space will be present
echo $newString;
?>