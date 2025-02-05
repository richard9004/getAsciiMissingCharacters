<?php

function generateRandomAsciiArray():array {
    $startChar = ord(',');
    $endChar = ord('|');   
  
    $asciiChars = [];
    for ($i = $startChar; $i <= $endChar; $i++) {
        $asciiChars[] = chr($i);
    }
    
    shuffle($asciiChars);
    return $asciiChars;
}


$asciiArray = generateRandomAsciiArray();

//remove random element
$randomElementKey = array_rand($asciiArray);
//Just store this to verify output
$removedElement = $asciiArray[$randomElementKey];
unset($asciiArray[$randomElementKey]);

//Making the array sequencial again
$asciiArray = array_values($asciiArray);

$missingChar = current(array_diff(range(',', '|'), $asciiArray));

echo "The missing character is: " . $missingChar . "\n";
echo "The removed character was: " . $removedElement . "\n";

?>
