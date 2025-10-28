<?php
/*
    Problem: Hard Compare

    Description:
    Given four numbers A, B, C, and D,
    determine if A^B > C^D.
    Print "YES" if true, otherwise print "NO".

    Note:
    - Directly computing A^B or C^D may overflow for large B or D (up to 10^12).
    - Instead, we use logarithms to compare without calculating huge numbers.

    Input:
    - One line containing four integers: A B C D
      (1 ≤ A, C ≤ 10^7)
      (1 ≤ B, D ≤ 10^12)

    Output:
    - Print "YES" if A^B > C^D, otherwise "NO".

    Examples:
    Input:
    3 2 5 4
    Output:
    NO

    Input:
    2 3 2 2
    Output:
    YES
*/

// Step 1: Read the input numbers
fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

// Step 2: Compare using logarithms to avoid large powers
// AB > CD <=> b * log(a) > d * log(c)
if ($b * log($a) > $d * log($c)) {
    echo "YES\n";
} else {
    echo "NO\n";
}
