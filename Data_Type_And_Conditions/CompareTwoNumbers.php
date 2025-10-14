<?php
/*
    Problem: Compare Two Numbers

    Description:
    Given two numbers A and B, print "Yes" if A is greater than or equal to B.
    Otherwise, print "No".

    Input:
    - Only one line containing two numbers A and B (0 ≤ A, B ≤ 100)

    Output:
    - Print "Yes" if A ≥ B, otherwise print "No".

    Examples:
    Input:
    5 3
    Output:
    Yes

    Input:
    2 7
    Output:
    No
*/

// Read two numbers
fscanf(STDIN, '%d %d', $a, $b);

// Compare and print result
echo ($a >= $b) ? 'Yes' : 'No';
