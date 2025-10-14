<?php
/*
    Problem: Floor, Ceil and Round of Division

    Description:
    Given two numbers A and B, print:
    - floor(A / B)
    - ceil(A / B)
    - round(A / B)

    Definitions:
    - Floor: the greatest integer ≤ X
    - Ceil: the smallest integer ≥ X
    - Round: the nearest integer to X

    Input:
    - Only one line containing two numbers A and B (1 ≤ A, B ≤ 10^3)

    Output:
    - Print 3 lines in the following format:
        floor A / B = <floor result>
        ceil A / B = <ceil result>
        round A / B = <round result>

    Example:
    Input:
    10 3
    Output:
    floor 10 / 3 = 3
    ceil 10 / 3 = 4
    round 10 / 3 = 3
*/

// Read two numbers
fscanf(STDIN, '%d %d', $a, $b);

// Calculate and print results
echo "floor $a / $b = " . floor($a / $b) . PHP_EOL;
echo "ceil $a / $b = " . ceil($a / $b) . PHP_EOL;
echo "round $a / $b = " . round($a / $b) . PHP_EOL;
