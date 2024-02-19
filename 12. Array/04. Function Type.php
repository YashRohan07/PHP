<?php

// Define a simple function
function printMessage() {
    echo "Hello from the function!\n";
}


// Example 1: Using a function as an element in a numeric indexed array
$numericArray = array("John", 25, "printMessage"); // Store the function name as a string

// Call the function stored in the array using index
$numericArray[2](); // This will execute the printMessage function


// Example 2: Using a function as an item in an associative array
$associativeArray = array(
    "Name" => "Alice",
    "Age" => 30,
    "Greeting" => "printMessage" // Store the function name as a string
);

// Call the function stored in the array using the key
$associativeArray["Greeting"](); // This will execute the printMessage function

?>
