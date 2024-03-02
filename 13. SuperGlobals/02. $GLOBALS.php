<?php

/*
$GLOBALS is an array that contains all global variables.
Global variables are variables that can be accessed from any scope.
To use a global variable inside a function, you have to either define them as global with the global keyword
or refer to them by using the $GLOBALS syntax.
*/

// Refer to the global variable $x inside a function
$x = 25;

function myfunction1()
{
  echo $GLOBALS['x'];
}
myfunction1(); 



// Refer to global variables inside functions by defining them as global with the global keyword.
$y = 75;

function myfunction2()
{
  global $y;  // Define $y as global inside a function
  echo $y;
}
myfunction2(); 



//Variables created in the outer most scope are global variables
//either if they are created using the $GLOBALS syntax or not

$x = 100;  // Declare and initialize a global variable $x with the value 100

// Output the value of $x using the $GLOBALS superglobal
echo $GLOBALS["x"];  // Output: 100

// Output the value of $x directly (without using $GLOBALS)
echo $x;  // Output: 100



//Create a global variable from inside a function, and use it outside of the function
function myfunction() 
{
    $GLOBALS["x"] = 200;
}

myfunction();

// Output the value of the global variable "x" using the $GLOBALS array
echo $GLOBALS["x"];  // Output: 200

// Output the value of the global variable "x" directly
echo $x;   // Output: 200


?>
