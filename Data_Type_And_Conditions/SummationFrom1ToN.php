<?php
/*
    Problem: Summation from 1 to N

    Description:
    Given a number N, print the summation of all numbers from 1 to N (inclusive).

    Formula:
    ∑ i=1 to N of i

    Input:
    - Only one line containing a number N (1 ≤ N ≤ 10^9)

    Output:
    - Print the summation of the numbers between 1 and N (inclusive).

    Examples:
    Input:
    3
    Output:
    6

    Input:
    10
    Output:
    55
*/

// First Solution (Time limit exceeded with this way for big numbers):

$number = (int) readline();

$result = 0;

while ($number > 0) {
    $result += $number;
    $number--;
}

echo $result . PHP_EOL;

// Second Solution Using Formula (Best Solution):

$number = (int) readline();

$result = ($number * ($number + 1)) / 2;

echo (int)$result . PHP_EOL;