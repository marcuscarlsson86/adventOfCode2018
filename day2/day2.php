<?php
// Get the input numbers
$inputs = file_get_contents('./inputs2.txt');
// Move it into an array
$inputsLines = explode(PHP_EOL, $inputs);

// Create counters
$countOfTwo = 0;
$countOfThree = 0;

// Loop trough the array
foreach ($inputsLines as $inputLine) {
    
    // Initial values that changes if the string has the letters two or three times
    $hasTwo = false;
    $hasThree = false;
    // Counting chars on each line
    $countOfChars = count_chars($inputLine, 1);

    //Loop trough to get key and value      
    foreach ($countOfChars as $char => $value) {        
       
        // Check value and change the init value of true or false      
        if($value === 2) {
            $hasTwo = true;
        } 
        elseif ($value === 3) {
            $hasThree = true;
        }
    }
    // If true, add on 1
    if ($hasTwo == true) {
        $countOfTwo++;
    }
    if ($hasThree == true) {
        $countOfThree++;
    }
}

$sum = $countOfTwo * $countOfThree;
echo 'The sum: ' . $sum; 
