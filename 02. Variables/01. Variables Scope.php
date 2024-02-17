<?php
/*
   PHP Variable Scopes: local, global, static
*/

// Example 1: Global Scope
$x = 5;   // global scope

function myTest() {
    // Attempting to use $x inside this function will generate an error
    // Uncommenting the line below will result in an error
    // echo "Variable x inside function is: $x";  
}
myTest();
echo "Variable x outside function is: $x";  // Output: 5

// Example 2: Local Scope
function myTestLocal() {
    $x = 5; // local scope
    echo "Variable x inside function is: $x";  // Output: 5
}

myTestLocal();

// Attempting to use $x outside the function will generate an error
// Uncommenting the line below will result in an error
// echo "Variable x outside function is: $x";  


// Example 3: Global Keyword
$x = 10;
$y = 10;

function myTestGlobal() {
    global $x, $y;  
    $y = $x + $y;
}

myTestGlobal();
echo $y; // Output: 20


// Example 4: $GLOBALS Array
/*
PHP also stores all global variables in an array called $GLOBALS[index].
The index holds the name of the variable. This array is also accessible from within functions and can be used to update global variables directly
*/
$x = 5;
$y = 10;

function myTestGlobals() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTestGlobals();
echo $y; // Output: 15


// Example 5: Static Keyword
/*
when a function is completed/executed, all of its variables are deleted. 
Sometimes we want a local variable NOT to be deleted.
To do this, use the static keyword when you first declare the variable
*/
function myTestStatic() {
    static $staticX = 0; // Declare a static variable
    echo $staticX;
    $staticX++;
}

myTestStatic(); // Output: 0
myTestStatic(); // Output: 1
myTestStatic(); // Output: 2

// The variable is still local to the function and retains its value between calls
?>
