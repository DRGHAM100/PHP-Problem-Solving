<?php
/*
    Problem: Last Two Digits of Multiplication

    Description:
    Given four numbers A, B, C, and D, 
    print the last two digits of their multiplication.

    Note:
    - The last two digits of a number are the remainder when divided by 100.
    - Avoid computing the full multiplication directly for very large numbers 
      because it may exceed integer limits.

    Input:
    - One line containing four integers: A B C D
      (2 ≤ A, B, C, D ≤ 10^9)

    Output:
    - Print the last two digits of A * B * C * D.
    - Always print two digits (e.g., 05 instead of 5).

    Examples:
    Input:
    12 34 56 78
    Output:
    08

    Input:
    2 3 4 5
    Output:
    20
*/

// Step 1: Read the four numbers from input
fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

// Step 2: Calculate the last two digits using modulo
// We take modulo 100 at each multiplication step to avoid large numbers
$lastTwoDigits = ($a % 100 * $b % 100 * $c % 100 * $d % 100) % 100;

// Step 3: Print the result in two-digit format
printf("%02d\n", $lastTwoDigits);
