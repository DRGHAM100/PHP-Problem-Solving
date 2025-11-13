<?php
/*
    Problem: Next Alphabet Character

    Description:
    Given a lowercase English letter C, print the next character in the alphabet.
    If the letter is 'z', the next letter should be 'a'.

    Input:
    - A single lowercase English letter C.

    Output:
    - The next letter in the alphabet.

    Example:
    Input:
    a
    Output:
    b

    Note:
    - The next letter to 'z' is 'a'.
*/

// Read input
$C = trim(fgets(STDIN));

// Find the next character
if ($C === 'z') {
    $next = 'a';
} else {
    $next = chr(ord($C) + 1);
}

// Output result
echo $next . PHP_EOL;
