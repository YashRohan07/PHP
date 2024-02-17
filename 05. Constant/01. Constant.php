<?php
/*
define(name, value, case-insensitive);

name: Specifies the name of the constant
value: Specifies the value of the constant
case-insensitive: Specifies whether the constant name should be case-insensitive. Default is false.

const are always case-sensitive
define() has a case-insensitive option.
const cannot be created inside another block scope, like inside a function or inside an if statement.
define() can be created inside another block scope

*/

// Case-sensitive
define("HELLOW", "Welcome to Home");
echo HELLOW;  // Output: "Welcome to Home"


// Case-insensitive (no longer supported)
// define("HELLOW", "Welcome to University", false); // Avoid redefining the constant


// Case-insensitive (explicitly enabled)
define("Hello", "Welcome to University", true);
echo Hello;  // Output: "Welcome to University"


// Create a constant with the const keyword:
const player = "Virat";
echo player;  // Output: "Virat"


// Create an Array constant
define("players", ["Virat", "Dhoni", "Rohit"]);
echo players[1];   // Output: "Dhoni"


// Constants are automatically global and can be used across the entire script
define("HLW", "Welcome to PHP");
function myTest() {
  echo HLW;
}
myTest();  // Output: "Welcome to PHP"

?>