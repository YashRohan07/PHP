<?php

//Associative arrays are arrays that use named keys that you assign to them
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);
/*
Output:
array(3) {
  ["brand"]=>
  string(4) "Ford"
  ["model"]=>
  string(7) "Mustang"
  ["year"]=>
  int(1964)
}
*/

//To access an array item you can refer to the key name
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];  // Output: Mustang
//echo $cars['model'];  // You can use both double and single quotes when accessing an array


//To change the value of an array item, use the key name
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;  
echo $car["year"]; // Output: 2024


//Display all array items, keys and values using foreach loop.
$car = array("Brand"=>"Ford", "Model"=>"Mustang", "Year"=>1964);
foreach ($car as $x => $y) {
  echo "$x: $y ";  // Brand: Ford Model: Mustang Year: 1964 
}


//Indexed arrays are the same as associative arrays, but associative arrays have names instead of numbers:
$myCar = [
  "brand" => "Ford",
  "model" => "Mustang",
  "year" => 1964
];

//you can declare the array first, and then add items to it
$myCar = [];
$myCar["brand"] = "Ford";
$myCar["model"] = "Mustang";
$myCar["year"] = 1964;

//Mixing Array Keys : You can have arrays with both indexed and named keys 
$myArr = [];
$myArr[0] = "apples";
$myArr[1] = "bananas";
$myArr["fruit"] = "cherries";

?>