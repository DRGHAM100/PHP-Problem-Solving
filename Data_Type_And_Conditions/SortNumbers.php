<?php
/*
    Problem: Sort Numbers

    Description:
    Given three numbers A, B, C, print these numbers in ascending order followed by a blank line 
    and then the values in the sequence as they were read.

    Input:
    - One line containing three integers A, B, C (-10^6 ≤ A, B, C ≤ 10^6)

    Output:
    - Print the three numbers in ascending order, each on a separate line
    - Then print a blank line
    - Then print the original numbers in the sequence they were read

    Examples:
    Input: 3 -2 1
    Output:
    -2
    1
    3

    3
    -2
    1
*/

// Read the input numbers
fscanf(STDIN, '%d %d %d', $x, $y, $z);

$arr = [$x, $y, $z];

// Sort numbers in ascending order
sort($arr);

// Print sorted numbers
foreach ($arr as $num) {
    echo "$num\n";
}

// Print a blank line
echo PHP_EOL;

// Print the original sequence
echo "$x\n$y\n$z\n";
