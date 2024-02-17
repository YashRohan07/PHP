<?php
// If you want to change the data type of an existing variable, but not by changing the value, you can use casting.

// Cast to String
$x = 5;
$x = (string) $x;
var_dump($x);  // Output: string(1) "5"

// Cast to Float
$x = 5;
$x = (float) $x;
var_dump($x);  // Output: float(5)

// Cast to Integer
$x = 5.5;
$x = (int) $x;
var_dump($x);  // Output: int(5)

// Cast to Boolean
$x = 5;
$x = (bool) $x;
var_dump($x);  // Output: bool(true)
// If a value is 0, NULL, false, or empty, (bool) converts it into false, otherwise true. Even -1 converts to true.

// Set to Null
$x = 5;
$x = (unset) $x;
var_dump($x);  // Output: NULL

// Cast to Array
$y = "Yash";
$y = (array) $y;
var_dump($y);
/*
Output:
array(1) {
  [0]=>
  string(4) "Yash"
}

When converting into arrays, most data types convert into an indexed array with one element.
NULL values convert to an empty array object.
Objects convert into associative arrays where the property names become the keys, and
the property values become the values.
*/
?>
