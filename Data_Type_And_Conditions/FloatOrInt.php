<?php
/*
    Problem: Float or Int

    Description:
    Given a number N, determine whether it is an integer or a float.
    - If N is an integer, print: "int <integer_part>"
    - If N is a float, print: "float <integer_part> <decimal_part>"

    Input:
    - One number N (1 ≤ N ≤ 10^3)

    Output:
    - According to the rules above

    Examples:
    Input: 234.000
    Output: int 234

    Input: 534.958
    Output: float 534 0.958
*/

// Read the number as float
fscanf(STDIN, '%f', $x);

// Check if the number is integer
if ((float)$x == (int)$x) {
    echo 'int ' . (int)$x . PHP_EOL;
} else {
    // Calculate integer part
    $intPart = (int)$x;
    // Calculate decimal part
    $decimalPart = $x - $intPart;
    echo 'float ' . $intPart . ' ' . $decimalPart . PHP_EOL;
}
