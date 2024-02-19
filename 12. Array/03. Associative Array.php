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

//To access an array item by referring to its key name
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["model"];  // Output: Mustang
//echo $cars['model'];  // You can use both double and single quotes when accessing an array


//To change the value of an array item, use the key name
$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
$car["year"] = 2024;  
echo $car["year"]; // Output: 2024


//Add one item to the car array
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars["color"] = "Red";
print_r($cars);  
/*
Output:
Array
(
    [brand] => Ford
    [model] => Mustang
    [color] => Red
)
*/
 

//To add multiple items to an existing array, use the += operator
$cars = array("brand" => "Ford", "model" => "Mustang");
$cars += ["color" => "red", "year" => 1964];


//Remove Item From an Associative Array
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
unset($cars["model"]);
print_r($cars); //Output: Array ( [brand] => Ford [year] => 1964 )


//Use the array_diff() function to remove items from an associative array
$cars = array("brand" => "Ford", "model" => "Mustang", "year" => 1964);
$newarray = array_diff($cars, ["Mustang", 1964]);  //array_diff() function takes values as parameters, and not keys.
print_r($newarray); // Output:  Array ( [brand] => Ford )


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



//Display all array items, keys and values using foreach loop.
$car = array("Brand"=>"Ford", "Model"=>"Mustang", "Year"=>1964);
foreach ($car as $x => $y)  // $x represents the key, and $y represents the value
{
  echo "$x: $y ";  // Brand: Ford Model: Mustang Year: 1964 
}


//Update Array Items in a Foreach Loop and Change ALL item values to "Ford"
$cars = array("Volvo", "BMW", "Toyota");
foreach ($cars as &$x) {
  $x = "Ford";
}
unset($x);  //Without the unset($x) function, the $x variable will remain as a reference to the last array item
print_r($cars);

/*
Array
(
    [0] => Ford
    [1] => Ford
    [2] => Ford
)

echo statement is not suitable for displaying the contents of an array in PHP. 
Instead, you should use print_r or var_dump to output the array structure

*/

?>