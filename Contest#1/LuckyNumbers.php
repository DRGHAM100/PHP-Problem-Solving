<?php
/*
Problem: Lucky Two-Digit Number

Description:
A number of two digits is lucky if one of its digits is divisible by the other.

For example, 39, 82, and 55 are lucky, while 79 and 43 are not.

Given a number between 10 and 99, determine whether it is lucky or not.

Input:
Only one line containing a single number N (10 ≤ N ≤ 99).

Output:
Print "YES" if the given number is lucky, otherwise print "NO".

Examples:
Input:
39
Output:
YES

Input:
64
Output:
NO
*/

// Read input
fscanf(STDIN, '%d', $n);

// Extract tens and units digits
$a = intdiv($n, 10);
$b = $n % 10;

$lucky = false;

// Check if one digit divides the other
if ($b != 0 && $a % $b == 0) {
    $lucky = true;
} elseif ($a != 0 && $b % $a == 0) {
    $lucky = true;
}

// Output result
echo $lucky ? 'YES' : 'NO';
