<?php
/*
    Problem: Multiples

    Description:
    Given two numbers A and B, print "Multiples" if A is a multiple of B or vice versa.
    Otherwise, print "No Multiples".

    Input:
    - Only one line containing two numbers A and B (1 ≤ A, B ≤ 10^6)

    Output:
    - Print "Multiples" or "No Multiples" according to the statement.

    Examples:
    Input:
    6 24
    Output:
    Multiples

    Input:
    6 25
    Output:
    No Multiples
*/

// Read input
fscanf(STDIN, '%d %d', $a, $b);

// Check multiples
if ($a % $b == 0 || $b % $a == 0) 
{
    echo "Multiples";
}
else 
{
    echo "No Multiples";
}
