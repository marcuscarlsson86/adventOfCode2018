<?php
// Get the input numbers
$inputs = file_get_contents('./inputs.txt');
// Move it into an array
$inputsArray = explode(PHP_EOL, $inputs);
// Puzzle was to start at zero
$frequency = 0;

// Loop trough the array
foreach ($inputsArray as $input) {
    // add each input number to the frequency variable
    $frequency += $input;
}
//Dump it out
echo 'Answer is: ' . $frequency . ' is the new frequency';

