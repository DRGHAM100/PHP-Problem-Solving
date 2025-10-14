<?php
/*
    Problem: Character Type

    Description:
    Given a letter X. Determine whether X is a digit or an alphabet.
    If it is an alphabet, determine if it is a capital case or a small case.

    Note:
    - Digits in ASCII: '0' = 48, '1' = 49, ...
    - Capital letters in ASCII: 'A' = 65, 'B' = 66, ...
    - Small letters in ASCII: 'a' = 97, 'b' = 98, ...

    Input:
    - Only one line containing a character X (a capital/small letter or digit).

    Output:
    - Print "IS DIGIT" if X is a digit.
    - Otherwise, print:
        ALPHA
        IS CAPITAL   (if X is uppercase)
        IS SMALL     (if X is lowercase)

    Examples:
    Input:
    A
    Output:
    ALPHA
    IS CAPITAL

    Input:
    a
    Output:
    ALPHA
    IS SMALL

    Input:
    5
    Output:
    IS DIGIT
*/

// Read character
$x = readline();

if (is_numeric($x)) {
    echo "IS DIGIT";
} else {
    echo "ALPHA" . PHP_EOL;

    if (ctype_upper($x)) {
        echo "IS CAPITAL";
    } elseif (ctype_lower($x)) {
        echo "IS SMALL";
    }
}
