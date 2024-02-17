<?php
/*
PHP supports the following data types:
String, Integer, Float/Double, Boolean, Array, Object, NULL, Resource
The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
A common example of using the resource data type is a database call
*/

$x = 5;
var_dump($x);   // var_dump() function returns the data type and the value
//Output: int(5)

$x = 10.365;
var_dump($x);   // Output: float(10.365)

$x = true;
var_dump($x);  // Output: bool(true)


$singer = array("Arijit","Atif","Shreya");  //  array stores multiple values in one single variable
var_dump($singer);
/*
array(3) {
  [0]=>
  string(6) "Arijit"
  [1]=>
  string(4) "Atif"
  [2]=>
  string(6) "Shreya"
}
*/

// A string can be any text inside quotes. You can use single or double quotes
$x = "Yash Bhai";
$y = 'Rohan Bhai';

var_dump($x);
echo "\n";
var_dump($y);
/*
output:
string(9) "Yash Bhai"
string(10) "Rohan Bhai"
*/


$x = "Hello world!";
$x = null;
var_dump($x);  // Output: NULL


// Check if the type of a variable is integer or float
$x = 5985;
var_dump(is_int($x));  // Output: bool(true)

$x = 59.85;
var_dump(is_int($x));    // Output: bool(false)
var_dump(is_float($x));  // Output: bool(true)


// Check if a numeric value is finite or infinite
$x = 1.9e411;
$y = 155.12;
var_dump($x);  //Output: float(INF)
var_dump($y);  //Output: float(155.12)


// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);  // Output: float(NAN)


//Check if the variable is numeric
$x = 5985;
var_dump(is_numeric($x));  //Output: bool(true)

$x = "5985";
var_dump(is_numeric($x));  //Output: bool(true)

$x = "59.85" + 100;
var_dump(is_numeric($x));  //Output: bool(true)

$x = "Hello";
var_dump(is_numeric($x));  //Output: bool(false)


?>