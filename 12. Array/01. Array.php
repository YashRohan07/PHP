<?php

/*
An array is a special variable that can hold many values under a single name,
and you can access the values by referring to an index number or name.
Array items can be of any data type. Array items can also be objects, functions, or even arrays.

In PHP, there are three types of arrays:
- Indexed arrays: Arrays with a numeric index
- Associative arrays: Arrays with named keys
- Multidimensional arrays: Arrays containing one or more arrays
*/

//You can create arrays by using the array() function
$cars = array("Volvo", "BMW", "Toyota");

//You can also use a shorter syntax by using the [] brackets
$cars = ["Volvo", "BMW", "Toyota"];

//array declaration can span multiple lines
$cars = [
    "Volvo",
    "BMW",
    "Toyota"
  ];

//A comma after the last item is allowed  
$cars = [
    "Volvo",
    "BMW",
    "Toyota",
  ];

//Array Keys
$cars = [
    0 => "Volvo",
    1 => "BMW",
    2 =>"Toyota"
  ];

//You can declare an empty array first, and add items to it later
  $cars = [];
  $cars[0] = "Volvo";
  $cars[1] = "BMW";
  $cars[2] = "Toyota";


// An array stores multiple values in one single variable
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars); // Output: 3    [count() - for counting array items]

// Array items of four different data types
$myArr = array("Volvo", 15, ["apples", "bananas"], myFunction());
echo $myArr[0];   // Output: Volvo

// Function declaration
function myFunction() {
    return "Hello from myFunction!";
}
?>
