<?php
/* There are two basic ways to get output: echo and print
The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions.
echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print
*/

// Using echo to display text with line breaks
echo "Hello, PHP!\n";  // \n for a line break
echo "This is an example using echo.\n\n";  // Double \n for two line breaks

// Using print to display text with line breaks
print "Hello, PHP!\n";  
print "This is an example using print.\n\n"; 

// Using echo to concatenate strings and variables
$name = "Yash";
$age = 25;
echo "My name is " . $name . " and I am " . $age . " years old.\n";

// Using print to concatenate strings and variables
$city = "New York";
$country = "USA";
print "I live in " . $city . ", " . $country . ".\n";


$txt1 = "Yash Rohan";
$txt2 = "Virat";
$x = 5;
$y = 10;

echo "<h2>" . $txt1 . "</h2>";
echo "Play with " . $txt2 . "<br>";   //If you are working within HTML,you can use HTML line break tag (<br>) for line breaks.
echo $x + $y;

print "<h2>" . $txt1 . "</h2>";
print "Play with " . $txt2 . "<br>";
print $x + $y;

?>