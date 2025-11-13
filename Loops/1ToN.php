<?php
/*
Problem: Print Numbers from 1 to N

Description:
Given a number N. Print numbers from 1 to N in separate lines.

Input:
Only one line containing a number N (1 ≤ N ≤ 10^3).

Output:
Print N lines according to the required format.

Example:
Input:
5
Output:
1
2
3
4
5
*/

// Read input
fscanf(STDIN, '%d', $n);

// Print numbers from 1 to N
for ($i = 1; $i <= $n; $i++) {
    echo $i . PHP_EOL;
}
