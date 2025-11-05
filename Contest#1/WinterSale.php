<?php
/*
    Problem: Winter Sale

    Description:
    Mrs. Sarah wants to know the original price of a T-shirt
    given its price after discount and the discount percentage.

    Input:
    - Two integers X and P (1 ≤ X ≤ 99, 1 ≤ P ≤ 40000)
      X = discount percentage
      P = price after discount

    Output:
    - The original price of the T-shirt rounded to 2 decimal places.

    Example:
    Input:
    20 80
    Output:
    100.00
*/

// Read input
fscanf(STDIN, "%d %d", $X, $P);

// Calculate original price
$originalPrice = $P / (1 - $X / 100);

// Output with 2 decimal places
printf("%.2f\n", $originalPrice);
