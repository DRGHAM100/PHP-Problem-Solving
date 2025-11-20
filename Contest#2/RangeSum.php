<?php
/*
Problem: Range Sum

Description:
Compute the sum of all numbers from L to R inclusive.
L and R can be up to 10^9 and T up to 10^5.

Solution:
Use formula sum(L..R) = sum(1..R) - sum(1..(L-1))
Use BC Math to handle very large integers.
*/

fscanf(STDIN, "%d", $T);

for ($i = 0; $i < $T; $i++) {
    fscanf(STDIN, "%d %d", $L, $R);

    // Ensure L <= R
    if ($L > $R) {
        $tmp = $L;
        $L = $R;
        $R = $tmp;
    }

    // Convert to strings for BC Math
    $L = (string)$L;
    $R = (string)$R;

    // sum(1..R) = R*(R+1)/2
    $sumR = bcdiv(bcmul($R, bcadd($R, '1')), '2');
    // sum(1..L-1) = (L-1)*L/2
    $Lminus1 = bcsub($L, '1');
    $sumLminus1 = bcdiv(bcmul($Lminus1, $L), '2');

    // sum(L..R) = sumR - sumLminus1
    $sum = bcsub($sumR, $sumLminus1);

    echo $sum . PHP_EOL;
}
