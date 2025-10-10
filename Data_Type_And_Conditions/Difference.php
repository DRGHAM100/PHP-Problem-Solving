<?php
/*
    Problem: Difference

    Description:
    Given four numbers A, B, C, and D, calculate the result of the equation:
    X = (A * B) - (C * D)

    Input:
    - Only one line containing four space-separated integers A, B, C, D 
      (-105 ≤ A, B, C, D ≤ 105)

    Output:
    - Print "Difference = <result>" (without quotes)

    Example:
    Input:
    5 6 7 8
    Output:
    Difference = -26
*/

// Read four integers from input
fscanf(STDIN, '%d %d %d %d', $a, $b, $c, $d);

// Calculate the difference
$result = ($a * $b) - ($c * $d);

// Print the result
echo 'Difference = ' . $result . PHP_EOL;
