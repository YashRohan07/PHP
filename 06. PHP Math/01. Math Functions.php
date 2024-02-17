<?php

// pi() function returns the value of PI
$piValue = pi();
echo "PI Value: " . $piValue;  // Output: 3.1415926535898
echo "\n";

// min() and max() functions return the lowest or highest value in a list of arguments
$minValue = min(0, 150, 30, 20, -8, -200);
$maxValue = max(0, 150, 30, 20, -8, -200);
echo "Min Value: " . $minValue;  // Output: -200
echo "\n";
echo "Max Value: " . $maxValue;  // Output: 150
echo "\n";

// abs() function returns the absolute (positive) value of a number
$absoluteValue = abs(-5.56);
echo "Absolute Value: " . $absoluteValue;  // Output: 5.56
echo "\n";

// sqrt() function returns the square root of a number
$squareRootValue = sqrt(16);
echo "Square Root Value: " . $squareRootValue;   // Output: 4
echo "\n";

// round() function rounds a floating-point number to its nearest integer
$roundedValue = round(7.4);
echo "Rounded Value: " . $roundedValue;    // Output: 7
echo "\n";

// rand() function generates a random number
$randomNumber = rand();
echo "Random Number: " . $randomNumber;
echo "\n";

// If you want a random integer between 5 and 10 (inclusive)
$randomRange = rand(5, 10);
echo "Random Number Between 5 and 10: " . $randomRange;

?>
