<?php

// Example 1: strlen() - Returns the length of a string
echo strlen("Yash Rohan");  // Output: 10


// Example 2: str_word_count() - Counts the number of words in a string
echo str_word_count("Yash Rohan");  // Output: 2


// Example 3: strpos() - Searches for a specific text within a string
// If a match is found, the function returns the character position of the first match. 
// If no match is found, it will return FALSE.
echo strpos("Hello world!", "world");  // Output: 6


// Example 4: strtoupper() - Converts a string to upper case
$x = "Yash";
echo strtoupper($x);  // Output: YASH


// Example 5: strtolower() - Converts a string to lower case
$x = "Yash";
echo strtolower($x);  // Output: yash


// Example 6: str_replace() - Replaces characters in a string
$x = "Hello World";
echo str_replace("World", "Earth", $x);  // Output: Hello Earth


// Example 7: strrev() - Reverses a string
$x = "Hello";
echo strrev($x);  // Output: olleH


// Example 8: trim() - Removes whitespace from the beginning or end
$x = " Hello Rohan Bhai ";
echo trim($x);  // Output: Hello Rohan Bhai


// Example 9: substr() - Returns a portion of a string
$x = "Hello World!";
echo substr($x, 6, 5);  // Output: World

$x = "Hello World!";  // Slice to the End
echo substr($x, 6);  // Output: World!

$x = "Hello World!";  // Slice From the End. Get the 3 characters, starting from the "o" in world (index -5). The last character has index -1.
echo substr($x, -5, 3);  // Output: orl

$x = "Hello World!";  // Use negative length to specify how many characters to omit, starting from the end of the string
echo substr($x, 5, -3);  // Output: o W


// Example 10: Concatenation using the . operator
$x = "Hello";
$y = "World";
$z = $x . $y; 
echo $z;   // Output: HelloWorld

// Better way with double quotes for spacing
// $z = "$x $y";  // Output: Hello World
// $z = $x . " " . $y;   //You can add a space character like this too.


/*
Escape Character
To insert characters that are illegal in a string, use an escape character.
An escape character is a backslash \ followed by the character you want to insert.
$x = "We are the so-called "Vikings" from the north.";  // example of an illegal character is a double quote inside a string that is surrounded by double quotes
*/
$x = "We are the so-called \"Vikings\" from the north.";
echo $x;  // Output: We are the so-called "Vikings" from the north.


/*
Convert String into Array
explode() function splits a string into an array
The first parameter of the explode() function represents the "separator". 
The "separator" specifies where to split the string.
*/
$x = "Hello World!";
$y = explode(" ", $x);
print_r($y);  // Output: Array ( [0] => Hello [1] => World! )

?>
