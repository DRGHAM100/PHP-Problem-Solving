<?php
/*
Problem: Lucky Numbers in a Range

Description:
Given two numbers A and B. Print all lucky numbers between A and B inclusive.

Note:
The Lucky number is any positive number whose decimal representation contains only 4 and 7.

For example:
- Lucky numbers: 4, 7, 47, 744
- Not lucky: 5, 17, 174

Input:
Only one line containing two numbers A and B (1 ≤ A ≤ B ≤ 10^5).

Output:
Print all lucky numbers between A and B inclusive separated by a space.
If there is no lucky number print -1.

Examples:
Input:
4 20
Output:
4 7

Input:
8 15
Output:
-1
*/

// Read input
fscanf(STDIN, '%d %d', $a, $b);

// Array to store lucky numbers
$luckyNumbers = [];

// Loop through all numbers from A to B
for ($i = $a; $i <= $b; $i++) {
    // Convert the number into an array of digits
    $digits = array_map('intval', str_split($i));
    
    // Assume the number is lucky
    $isLucky = true;
    
    // Check each digit
    foreach ($digits as $d) {
        // If a digit is not 4 or 7, the number is not lucky
        if ($d != 4 && $d != 7) {
            $isLucky = false;
            break; // No need to check further digits
        }
    }
    
    // If lucky, add to the array
    if ($isLucky) {
        $luckyNumbers[] = $i;
    }
}

// Output the result
if (empty($luckyNumbers)) {
    // No lucky numbers found
    echo -1;
} else {
    // Print all lucky numbers separated by space
    echo implode(' ', $luckyNumbers);
}
