<?php

$inputs = file_get_contents('./inputs.txt');
$inputsArray = explode(PHP_EOL, $inputs);

$frequency = 0;

echo '-------------------------';

echo gettype($inputsArray);


foreach ($inputsArray as $input) {
    $frequency += $input;
}


echo 'Answer is: ' . $frequency . ' is the new frequency';

