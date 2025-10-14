<?php
/*
    Problem: Toggle Case

    Description:
    Given a letter X. 
    - If the letter is lowercase, print the uppercase version.
    - If the letter is uppercase, print the lowercase version.

    Note:
    - The difference between 'a' and 'A' in ASCII is 32.

    Input:
    - Only one line containing a character X (capital or small letter).

    Output:
    - Print the converted letter.

    Examples:
    Input:
    a
    Output:
    A

    Input:
    A
    Output:
    a
*/

// Read input character
$x = readline();

// Convert case using ASCII difference
if (ctype_upper($x)) {
    // Uppercase -> lowercase
    $small_letter_ord = ord($x) + 32;
    echo chr($small_letter_ord);
} elseif (ctype_lower($x)) {
    // Lowercase -> uppercase
    $capital_letter_ord = ord($x) - 32;
    echo chr($capital_letter_ord);
}
