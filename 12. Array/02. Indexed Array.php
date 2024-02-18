<?php

//Create and display an indexed array
$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars); 
/*
Output:
array(3) {
  [0]=>
  string(5) "Volvo"
  [1]=>
  string(3) "BMW"
  [2]=>
  string(6) "Toyota"
}
*/


//Display all array items
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as $x) {
  echo "$x \n";
}
/*
Output:
Volvo 
BMW 
Toyota 
*/


//To change the value of an array item, use the index number
$cars = array("Volvo", "BMW", "Toyota");
$cars[1] = "Ford";
echo $cars[1]; // Output: Ford

//array_push() function to add a new item, the new item will get the index 3
$cars = array("Volvo", "BMW", "Toyota");
array_push($cars, "Ford");
foreach ($cars as $x) {
    echo "$x ";  // Volvo BMW Toyota Ford
  }
?>