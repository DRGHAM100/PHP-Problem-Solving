<?php
/*
    Problem: Memo and Momo

    Description:
    Memo and Momo are playing a game.
    Memo chooses a positive number a, and Momo chooses a positive number b.

    Rules:
    - If both a and b are divisible by k → print "Both"
    - If only a is divisible by k → print "Memo"
    - If only b is divisible by k → print "Momo"
    - If neither is divisible by k → print "No One"

    Input:
    - Three positive integers a, b, k (1 ≤ a, b, k ≤ 10^18)

    Output:
    - The winner according to the rules.

    Examples:
    Input:
    15 7 3
    Output:
    Memo

    Input:
    22 10 2
    Output:
    Both
*/

// Read input
fscanf(STDIN, "%d %d %d", $a, $b, $k);

// Determine the winner
if ($a % $k == 0 && $b % $k == 0) {
    echo "Both\n";
} elseif ($a % $k == 0) {
    echo "Memo\n";
} elseif ($b % $k == 0) {
    echo "Momo\n";
} else {
    echo "No One\n";
}
