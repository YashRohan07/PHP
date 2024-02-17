<?php
/*
PHP has the following operators:
Arithmetic operators, Assignment operators, Comparison operators, Increment/Decrement operators, Logical operators
String operators, Array operators, Conditional assignment operators
*/

// Arithmetic operators
$x = 10;
$y = 5;

$sum = $x + $y;  // Addition
$difference = $x - $y;  // Subtraction
$product = $x * $y;  // Multiplication
$quotient = $x / $y;  // Division
$remainder = $x % $y;  // Modulus

echo "Sum: $sum, Difference: $difference, Product: $product, Quotient: $quotient, Remainder: $remainder\n\n";
// Output: Sum: 15, Difference: 5, Product: 50, Quotient: 2, Remainder: 0


// Assignment operators
$a = 10;
$a += 5;  // $a = $a + 5;
echo "Updated value of a: $a \n\n";  // Output: Updated value of a: 15


// Comparison operators
$p = 5;
$q = '5';

$equal = ($p == $q);  
$identical = ($p === $q);  
$notEqual = ($p != $q);  
$notIdentical = ($p !== $q);  
$greaterThan = ($p > $q);
$lessThan = ($p < $q);  

echo "Equal: $equal, Identical: $identical, Not Equal: $notEqual, Not Identical: $notIdentical, Greater Than: $greaterThan, Less Than: $lessThan\n\n";
// Output: Equal: true, Identical: false, Not Equal: false, Not Identical: true, Greater Than: false, Less Than: false


// Increment/Decrement operators
$counter = 5;
$counter++;  // Increment
$counter--;  // Decrement
echo "Updated value: $counter \n\n";  // Output: Updated value: 5


// Logical operators
$isTrue = true;
$isFalse = false;

$andResult = ($isTrue && $isFalse);  // Logical AND
$orResult = ($isTrue || $isFalse);  // Logical OR
$notResult = !$isTrue;  // Logical NOT

echo "AND Result: $andResult, OR Result: $orResult, NOT Result: $notResult\n\n";
// Output: AND Result: false, OR Result: true, NOT Result: false


// String operators
$str1 = "Hello ";
$str2 = "world!";
$concatenation = $str1 . $str2;  
echo "Concatenated String: $concatenation \n\n";  // Output: Concatenated String: Hello world!


// Array operators
$array1 = array(1, 2, 3);
$array2 = array(4, 5, 6);
$concatenatedArray = $array1 + $array2;  // Union
echo "Concatenated Array:\n";
print_r($concatenatedArray);
// Output: Concatenated Array: Array ( [0] => 1 [1] => 2 [2] => 3 [3] => 4 [4] => 5 [5] => 6 )


// Conditional assignment operators
$condition = true;
$result = $condition ? "Condition is true" : "Condition is false";
echo "Result: $result\n";   // Output: Result: Condition is true
?>
