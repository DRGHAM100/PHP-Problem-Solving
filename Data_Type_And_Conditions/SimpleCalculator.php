<?php
/*
    Problem: Simple Calculator

    Description:
    Given two numbers X and Y, print their summation, multiplication, and subtraction.

    Input:
    - Only one line containing two space-separated integers X and Y (1 ≤ X, Y ≤ 105)

    Output:
    - Print 3 lines:
        1. "X + Y = <sum>"
        2. "X * Y = <product>"
        3. "X - Y = <difference>"
      (without quotes)

    Example:
    Input:
    3 4

    Output:
    3 + 4 = 7
    3 * 4 = 12
    3 - 4 = -1
*/

// Read two integers from input
fscanf(STDIN, '%d %d', $a, $b);

// Perform operations and print results
echo $a . ' + ' . $b . ' = ' . ($a + $b) . PHP_EOL;
echo $a . ' * ' . $b . ' = ' . ($a * $b) . PHP_EOL;
echo $a . ' - ' . $b . ' = ' . ($a - $b) . PHP_EOL;
