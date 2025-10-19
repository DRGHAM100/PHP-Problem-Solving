<?php
/*
    Problem: First Digit Even or Odd

    Description:
    Given a number X. Print "EVEN" if the first digit of X is an even number.
    Otherwise, print "ODD".

    For example: In 4569 the first digit is 4, so the output is "EVEN".

    Input:
    - Only one line containing a number X (999 < X ≤ 9999)

    Output:
    - Print "EVEN" if the first digit is even, otherwise print "ODD".

    Example:
    Input:
    4569
    Output:
    EVEN
*/

// Read input
fscanf(STDIN, "%d", $number);

// Convert to string and get first digit
$first_digit = (int)strval($number)[0];

// Check if even or odd
if ($first_digit % 2 == 0) {
    echo "EVEN" . PHP_EOL;
} else {
    echo "ODD" . PHP_EOL;
}
