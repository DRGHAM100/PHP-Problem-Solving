<?php
/*
    Problem: Sum of Last Digits

    Description:
    Given two numbers N and M, print the sum of their last digits.

    Input:
    - One line containing two numbers N, M (0 ≤ N, M ≤ 10^18)

    Output:
    - Print the sum of the last digits of N and M

    Example:
    Input:
    13 12
    Output:
    5
*/

// Read the line and split into two numbers as strings
$input = explode(" ", readline());
list($n, $m) = $input;

// Get last digits as integers
$lastDigitN = (int)substr($n, -1);
$lastDigitM = (int)substr($m, -1);

// Calculate sum of last digits
$result = $lastDigitN + $lastDigitM;

// Print the result
echo $result . PHP_EOL;
