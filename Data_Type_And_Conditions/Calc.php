<?php
/*
    Problem: Simple Mathematical Expression

    Description:
    Given a mathematical expression. The expression will be one of the following:
    A + B, A - B, A * B, or A / B.

    You need to print the result of the mathematical expression.

    Input:
    - A single line containing A, S, and B (1 ≤ A, B ≤ 10^4),
      where S is one of the operators: +, -, *, /

    Output:
    - Print the result of the expression.

    Example:
    Input:
    7+54
    Output:
    61
*/

// Read input
$input = trim(fgets(STDIN));

// Extract numbers and operator
preg_match('/(\d+)([+\-*\/])(\d+)/', $input, $matches);

$a = (int)$matches[1];
$op = $matches[2];
$b = (int)$matches[3];

// Compute result
switch ($op) {
    case '+':
        $result = $a + $b;
        break;
    case '-':
        $result = $a - $b;
        break;
    case '*':
        $result = $a * $b;
        break;
    case '/':
        $result = intdiv($a, $b);
        break;
}

// Output result
echo $result . PHP_EOL;
