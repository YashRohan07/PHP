<?php 

//A multidimensional array is an array containing one or more arrays
//A two-dimensional array is an array of arrays and three-dimensional array is an array of arrays of arrays.
//The dimension of an array indicates the number of indices you need to select an element.

//two-dimensional $cricketers array contains four arrays, and it has two indices: row and column.
//To get access to the elements of the array we must point to the two indices (row and column)
$cricketers = array (
    array("Sakib",10,180),
    array("Mehedi",12,130),
    array("Jadeja",8,100),
    array("Shoaib",11,150)
  );

echo $cricketers[0][0]." = Wickets: ". $cricketers[0][1].", Runs: ". $cricketers[0][2].".\n";   //Sakib = Wickets: 10, Runs: 180.
echo $cricketers[1][0]." = Wickets: ". $cricketers[1][1].", Runs: ". $cricketers[1][2]. ".\n";  //Mehedi = Wickets: 12, Runs: 130.
echo $cricketers[2][0]." = Wickets: ". $cricketers[2][1].", Runs: ". $cricketers[2][2]. ".\n";  //Jadeja = Wickets: 8, Runs: 100.
echo $cricketers[3][0]." = Wickets: ". $cricketers[3][1].", Runs: ". $cricketers[3][2]. ".\n";  //Shoaib = Wickets: 11, Runs: 150.


//Using foreach Loop
$cricketers = array (
    array("Miraz",16,140),
    array("Rashid",12,130),
    array("Axar",18,120),
    array("Shadab",10,110)
  );

foreach ($cricketers as $player) {
    echo $player[0] . ": Wickets: " . $player[1] . ", Runs: " . $player[2] . ".\n";
}

/*
$rows = count($cricketers);
for ($i = 0; $i < $rows; $i++) {
    echo $cricketers[$i][0] . ": Wickets: " . $cricketers[$i][1] . ", Runs: " . $cricketers[$i][2] . ".\n";
}
*/


/*
Miraz: Wickets: 16, Runs: 140.
Rashid: Wickets: 12, Runs: 130.
Axar: Wickets: 18, Runs: 120.
Shadab: Wickets: 10, Runs: 110.
*/


//Using Row Column
$cricketers = array (
    array("Sakib",10,180),
    array("Mehedi",12,130),
    array("Jadeja",8,100),
    array("Shoaib",11,150)
  );

$rows = count($cricketers);
$cols = count($cricketers[0]);

// Iterate through each row (player) in the cricketers array
for ($row = 0; $row < $rows; $row++) {
    echo "Player: " . $cricketers[$row][0] . "\n";  // Print the player's name

    // Iterate through each column (wickets and runs) for the current player
    for ($col = 1; $col < $cols; $col++) {
        echo "Wickets: " . $cricketers[$row][$col] . ", ";   // Print wickets for the current player

        $col++;   // Move to the next column (runs) for the current player

        echo "Runs: " . $cricketers[$row][$col] . ".\n";   // Print runs for the current player
    }

    echo "\n";    // Print a newline to separate information for each player
}


/*
Player: Sakib
Wickets: 10, Runs: 180.

Player: Mehedi
Wickets: 12, Runs: 130.

Player: Jadeja
Wickets: 8, Runs: 100.

Player: Shoaib
Wickets: 11, Runs: 150.
*/

?>
