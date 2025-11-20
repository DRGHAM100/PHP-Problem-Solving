<?php
/*
Problem: Construct the Sum

Description:
Given n and s, find distinct positive integers, each ≤ n, whose sum equals s.
If impossible, print -1. Otherwise print any valid set (any order).

Constraints:
1 ≤ T ≤ 100
1 ≤ n ≤ 1e5
1 ≤ s ≤ 1e18

Approach (greedy):
Pick numbers from n down to 1. For each i, if s >= i, choose i and set s -= i.
Stop when s == 0. If after the loop s != 0, it's impossible.
This is O(n) per test case and safe for given constraints.
*/

fscanf(STDIN, "%d", $T);

while ($T--) {
    // Read n and s. s can be large, use (int) on 64-bit PHP (fits up to ~9e18).
    fscanf(STDIN, "%d %d", $n, $s);

    $res = [];
    // Greedy pick from n down to 1
    for ($i = $n; $i >= 1 && $s > 0; $i--) {
        if ($s >= $i) {
            $res[] = $i;
            // subtract i from s
            $s -= $i;
        }
    }

    if ($s != 0) {
        echo "-1\n";
    } else {
        // print chosen numbers (any order). We picked descending; that's fine.
        echo implode(" ", $res) . "\n";
    }
}
