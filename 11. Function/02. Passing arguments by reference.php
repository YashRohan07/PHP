<?php
/*
In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and
the variable that was passed into the function cannot be changed.
When a function argument is passed by reference, changes to the argument also change the variable that was passed in.
To turn a function argument into a reference, the & operator is used
*/

// Function to add 5 to the passed variable (by reference)
function add(&$value) {
    $value += 5;
  }
  
$num = 2;     // Initialize a variable with the value 2
add($num);    // Call the function, passing the variable by reference
echo $num;    // Output: 7 (original value + 5)

/*
function add that increments a variable by 5 when passed by reference. The variable $num is initialized to 2,
and after calling the function with $num as an argument, the result is 7
*/
?>