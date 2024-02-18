<?php
/*
A function that do not know how many arguments it will get.
By using the ... operator in front of the function parameter, the function accepts an unknown number of arguments.
This is also called a variadic function.
The variadic function argument becomes an array.
If the variadic argument is not the last argument, you will get an error
Having the ... operator on the first of two arguments, will raise an error
*/

function sum(...$x) {

    $total = 0;  // Initialize a variable to store the sum of the numbers.
    $len = count($x);

    // Loop through each element in the $x array
    for($i = 0; $i < $len; $i++) {
      $total += $x[$i];   // Add the current number to the total
    }
    return $total;
  }
  
$result = sum(5, 2, 6, 2, 7);
echo $result;  //Output: 22


// Variadic Argument
function name($lastname, ...$firstnames) {
    $txt = "";  // Initialize an empty string to store the names.
    $len = count($firstnames);  // Get the number of elements in the $firstnames array.

    // Loop through each element in the $firstnames array.
    for ($i = 0; $i < $len; $i++) {
        $txt .= "$firstnames[$i] $lastname.\n";   // Concatenate with the current first name and last name.
    }

    return $txt;
}

// Call the name function with a last name and multiple first names.
$a = name("Doe", "Jane", "John", "Joey");

echo $a;
/*
Output:
Jane Doe.
John Doe.
Joey Doe.
*/

?>