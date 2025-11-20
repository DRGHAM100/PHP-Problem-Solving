<?php
/*
Problem: Break Number (Maximum f(x))

Description:
Define f(x) as the number of times an integer x can be divided by 2 
until it becomes odd.

Given N numbers, determine the maximum f(x) among all of them.

Input:
- First line: integer N (1 ≤ N ≤ 10^5)
- Second line: N space-separated integers (1 ≤ number ≤ 10^18)

Output:
- Print a single integer: the maximum f(x) among all numbers.

Example:
Input:
3
18 24 7

Output:
3

Explanation:
- f(18) = 1 (18 → 9)
- f(24) = 3 (24 → 12 → 6 → 3)
- f(7) = 0 (7 is odd)
Maximum f(x) = 3
*/

// Read input
fscanf(STDIN, "%d", $n);
$numbers = explode(" ", trim(fgets(STDIN)));

$max = 0;

foreach ($numbers as $value) {
    $x = intval($value);
    $cnt = 0;

    while ($x % 2 == 0) {
        $x = intdiv($x, 2);
        $cnt++;
    }

    if ($cnt > $max) {
        $max = $cnt;
    }
}

// Output the maximum
echo $max . PHP_EOL;
