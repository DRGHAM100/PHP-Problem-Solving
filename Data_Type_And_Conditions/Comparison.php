<?php
/*
    Problem: Comparison

    Description:
    Given two integers A and B, and a comparison symbol S ('<', '>', '='), 
    determine if the comparison "A S B" is correct.

    Input:
    - One line: A S B (-100 ≤ A, B ≤ 100)

    Output:
    - Print "Right" if the comparison is true, otherwise "Wrong"

    Examples:
    Input: 3 < 5
    Output: Right

    Input: 10 = 5
    Output: Wrong
*/

// Read input line
$input = trim(fgets(STDIN));
$arr = explode(" ", $input);

$num1 = (int)$arr[0];
$op   = $arr[1];
$num2 = (int)$arr[2];

// Evaluate comparison
if (($op == '<' && $num1 < $num2) || ($op == '>' && $num1 > $num2) || ($op == '=' && $num1 == $num2)) 
{
    echo "Right\n";
} 
else 
{
    echo "Wrong\n";
}
