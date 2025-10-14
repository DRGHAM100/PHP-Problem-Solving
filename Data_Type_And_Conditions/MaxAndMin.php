<?php
/*
    Problem: Minimum and Maximum

    Description:
    Given three numbers A, B, and C, print the minimum and the maximum numbers.

    Input:
    - Only one line containing three numbers A, B, and C (-10^5 ≤ A, B, C ≤ 10^5)

    Output:
    - Print the minimum number followed by a single space, then the maximum number.

    Examples:
    Input:
    1 2 3
    Output:
    1 3

    Input:
    10 5 20
    Output:
    5 20
*/

// Read input
fscanf(STDIN, '%d %d %d', $a, $b, $c);

// Print minimum and maximum
echo min($a, $b, $c) . " " . max($a, $b, $c);
