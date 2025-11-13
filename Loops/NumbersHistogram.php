<?php
/*
Problem: Numbers Histogram

Description:
Given 3 lines of input:

1. First line contains a symbol S (can be +, -, *, /).
2. Second line contains a number N (1 ≤ N ≤ 50).
3. Third line contains N numbers X1, X2, ..., XN (1 ≤ Xi ≤ 100).

For each number Xi in the third line, print a new line that contains the symbol S repeated Xi times.

Input:
+
5
5 2 4 3 7

Output:
+++++
++
++++
+++
+++++++
*/

// Step 1: Read the symbol
$symbol = trim(fgets(STDIN));

// Step 2: Read the number of integers
$number = intval(fgets(STDIN));

// Step 3: Read the line of numbers and convert it to an array of integers
$numbers = array_map('intval', explode(' ', trim(fgets(STDIN))));

// Step 4: Loop through each number and print the symbol repeated that many times
foreach ($numbers as $num) {
    echo str_repeat($symbol, $num) . PHP_EOL;
}
