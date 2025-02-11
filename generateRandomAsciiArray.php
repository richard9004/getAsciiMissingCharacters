<?php
function generateRandomAsciiArray(string $startChar, string $endChar): array {
    $start = ord($startChar);
    $end = ord($endChar);
    $asciiArray = range($start, $end);
    shuffle($asciiArray);
    return array_map('chr', $asciiArray);
}

// Function to generate ascii array
$asciiArray = generateRandomAsciiArray(',', '|');
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
