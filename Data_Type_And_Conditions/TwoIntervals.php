<?php
/*
    Problem: Intersection of Two Intervals

    Description:
    Given two intervals [l1, r1] and [l2, r2], 
    find the intersection of the intervals if it exists.

    Note:
    - The intersection of two intervals is the range of numbers that appear in both intervals.
    - If there is no intersection, print -1.

    Input:
    - One line contains four integers: l1 r1 l2 r2
      representing the boundaries of the two intervals.

    Output:
    - Print the boundaries of the intersection if it exists.
    - Otherwise, print -1.

    Examples:
    Input:
    1 15 5 27
    Output:
    5 15

    Input:
    2 5 6 12
    Output:
    -1
*/

// Step 1: Read the interval boundaries from input
fscanf(STDIN, "%d %d %d %d", $l1, $r1, $l2, $r2);

// Step 2: Calculate the start and end of the intersection
$start = max($l1, $l2); // The intersection starts at the larger of the two starts
$end = min($r1, $r2);   // The intersection ends at the smaller of the two ends

// Step 3: Check if there is an intersection
if ($start > $end) {
    // No intersection
    echo -1 . PHP_EOL;
} else {
    // Print the intersection boundaries
    echo $start . " " . $end . PHP_EOL;
}
