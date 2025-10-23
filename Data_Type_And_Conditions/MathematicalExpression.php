<?php
/*
    Problem: Mathematical Expression

    Description:
    Given a simple mathematical expression of the form A S B = C, where S is '+', '-', or '*'.
    Determine if the expression is correct. If yes, print "Yes". If not, print the correct result.

    Input:
    - One line: A S B = C
      (0 ≤ A, B ≤ 100, -10^5 ≤ C ≤ 10^5)

    Output:
    - "Yes" if the expression is correct
    - Otherwise, print the correct result

    Example:
    Input: 5 + 10 = 15
    Output: Yes
*/

fscanf(STDIN, "%d %s %d %s %d", $A, $S, $B, $eq, $C);

// Compute the correct result
switch ($S) {
    case '+':
        $result = $A + $B;
        break;
    case '-':
        $result = $A - $B;
        break;
    case '*':
        $result = $A * $B;
        break;
    default:
        $result = null; // invalid operator
}

// Check if the given C is correct
if ($C == $result) {
    echo "Yes\n";
} else {
    echo $result . "\n";
}
