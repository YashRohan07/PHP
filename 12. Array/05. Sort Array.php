<?php

/*
sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key
*/

//Sort Array in Ascending Order - sort()
$car = array("Dominar", "BMW", "Civic", "Audi");
sort($car);
echo implode(", ", $car);   // Audi, BMW, Civic, Dominar
//implode(", ", $car) is used to join the array elements with a comma and space


$numbers = array(4, 6, 2, 8, 10);
sort($numbers);
foreach ($numbers as $num)
{
    echo $num . ", ";  //2, 4, 6, 8, 10, 
}



//Sort Array in Descending Order - rsort()
$num = array(4, 6, 2, 8, 10);
rsort($num);
echo implode(", ", $num);   //10, 8, 6, 4, 2


//Sort Array in Ascending Order, According to Value - asort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
echo implode(", ", $age);   //35, 37, 43


//Sort Array in Descending Order, According to Value - arsort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
echo implode(", ", $age);  //43, 37, 35


//Sort Array in Ascending Order, According to Key - ksort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
echo implode(", ", $age);   //37, 43, 35


//Sort Array in Descending Order, According to Key - krsort()
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
echo implode(", ", $age);   //35, 43, 37



?>