<?php
/*
    Problem: Circle Area

    Description:
    Given a number R, calculate the area of a circle using the formula:
    Area = π * R^2
    Use π = 3.141592653.

    Input:
    - Only one line containing the integer R (1 ≤ R ≤ 100)

    Output:
    - Print the calculated area with 9 digits after the decimal point

    Example:
    Input:
    2
    Output:
    12.566370612
*/

// Read the radius from input
fscanf(STDIN, '%d', $r);

// Define Pi
$pi = 3.141592653;

// Calculate area
$result = $pi * pow($r, 2);

// Print the result with 9 digits after decimal
echo number_format($result, 9, '.', '') . PHP_EOL;
