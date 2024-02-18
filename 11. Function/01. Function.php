<?php
/*
The real power of PHP comes from its functions. PHP has more than 1000 built-in functions
It is possible to create your own functions
A function is a block of statements that can be used repeatedly in a program.
A function will not execute automatically when a page loads.
A function will be executed by a call to the function.
A function name must start with a letter or an underscore. Function names are NOT case-sensitive
*/

// Creating a function named showMessage
function showMessage() {
    echo "Hello world";
}

showMessage(); // Calling the function to execute the code inside


//Function with One Argument
function showCar($name) {
    echo "$name \n";
}

// Calling the function with different arguments
showCar("AUDI");
showCar("Toyota");
showCar("BMW");


//Function with Two Arguments
function showDetails($name, $model) {
    echo "Name: $name and Model: $model \n";
}

// Calling the function with different sets of arguments
showDetails("AUDI", "A8");
showDetails("Toyota", "T5");
showDetails("BMW", "B7");


//Default Arguments :Creating a function named age with a default argument
function showAge($age = 20) {
    echo "Age: $age \n";
}

// Calling the function with different arguments
showAge(30);
showAge();  // Will use the default value (20)
showAge(15);


//Return Values: Creating a function named sum that returns the sum of two numbers
function Sum($x, $y) {
    $z = $x + $y;
    return $z;
}

// Calling the function and printing the returned value
echo "5 + 10 = " . Sum(5, 10) . "\n";
echo "2 + 4 = " . Sum(2, 4);

?>