<?php
function generateRandomAsciiArray(): array {
    $start = ord(',');
    $end = ord('|');
    $asciiArray = range($start, $end);
    shuffle($asciiArray);
    return $asciiArray;array_map('chr', $asciiArray)
}

// Generate array and remove a random element
$asciiArray = generateRandomAsciiArray();
$removedIndex = array_rand($asciiArray);
$removedChar = $asciiArray[$removedIndex];
unset($asciiArray[$removedIndex]);

// Find missing character via sum comparison
$sumExpected = array_sum(range(44, 124));
$sumActual = array_sum(array_map('ord', $asciiArray));
$missingChar = chr($sumExpected - $sumActual);

echo "The missing character is: $missingChar\n";
echo "The removed character was: $removedChar\n";
?>
