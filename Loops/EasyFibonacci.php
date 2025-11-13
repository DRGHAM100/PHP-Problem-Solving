<?php
/*
Problem: First N Fibonacci Numbers

Description:
Given a number N, print the first N numbers of the Fibonacci sequence.

Fibonacci sequence is defined as:
fib(1) = 0
fib(2) = 1
fib(n) = fib(n - 1) + fib(n - 2) for n > 2

Input:
Only one line containing a number N (1 ≤ N ≤ 45)

Output:
Print the first N numbers from the Fibonacci sequence separated by spaces.

Example:
Input:
7
Output:
0 1 1 2 3 5 8
*/

// Step 1: Read the input number N
fscanf(STDIN, '%d', $n);

// Step 2: Initialize an array to store the Fibonacci numbers
$fib = [];

// Step 3: Add the first Fibonacci number if N >= 1
if ($n >= 1) $fib[] = 0;

// Step 4: Add the second Fibonacci number if N >= 2
if ($n >= 2) $fib[] = 1;

// Step 5: Compute the rest of the Fibonacci numbers if N > 2
for ($i = 2; $i < $n; $i++) {
    // Each number is the sum of the previous two numbers
    $fib[] = $fib[$i - 1] + $fib[$i - 2];
}

// Step 6: Print all Fibonacci numbers separated by space
echo implode(' ', $fib);
