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


//Add three item to the fruits array
$fruits = array("Apple", "Banana", "Cherry");
array_push($fruits, "Orange", "Kiwi", "Lemon");  
echo $fruits;  // Output: Apple Banana Cherry Orange Kiwi Lemon


//Remove Array Item With the array_splice() function
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 1);  //Specify the index (where to start) and how many items you want to delete
echo $cars;  // Output: Volvo Toyota
//After the deletion, the array gets reindexed automtically, starting at index 0.


//Remove 2 items, starting a the second item (index 1)
$cars = array("Volvo", "BMW", "Toyota");
array_splice($cars, 1, 2);
echo $cars;  // Output: Volvo


//You can also use the unset() function to delete existing array items
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[1]);
echo $cars;  // Output: Volvo Toyota
//The unset() function does not re-arrange the indexes,
//meaning that after deletion the array will no longer contain the missing indexes.


//Remove the first and the second item
$cars = array("Volvo", "BMW", "Toyota");
unset($cars[0], $cars[1]);
echo $cars;  // Output: Toyota
//unset() function takes a unlimited number of arguments, and can be used to delete multiple array items



$cars = array("Volvo", "BMW", "Toyota");

array_pop($cars); // Remove the last item
print_r($cars); // Output: Array ( [0] => Volvo [1] => BMW )

array_shift($cars);  // Remove the first item
print_r($cars); // Output: Array ( [0] => BMW )


?>