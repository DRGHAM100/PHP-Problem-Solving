<?php
/*
    Problem: Basic Data Types

    Description:
    Read the following space-separated values from input: 
    int, long long, char, float, and double respectively.
    Print each value on a new line in the same order.

    Input:
    - Only one line containing space-separated values: int, long long, char, float, double

    Output:
    - Print each element on a new line
    - Do NOT print extra spaces

    Example:
    Input: 
    3 12345678912345 a 334.23 14049.30493
    Output:
    3
    12345678912345
    a
    334.23
    14049.3
*/

// Read input as a single line and split into parts
$input = explode(" ", readline());

// Print each element on a new line
echo implode("\n", $input) . PHP_EOL;
