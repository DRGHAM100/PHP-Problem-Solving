<?php
/*
    Problem: Determine Interval

    Description:
    Given a number X, determine in which of the following intervals it belongs:

    [0,25], (25,50], (50,75], (75,100]

    Notes:
    - '[' means greater than or equal to.
    - '(' means strictly greater than.
    - ']' means less than or equal to.
    - If X does not belong to any of these intervals, print "Out of Intervals".

    Input:
    - One number X (-1000 <= X <= 1000)

    Output:
    - Print the interval that X belongs to, or "Out of Intervals" if it doesn't belong to any.

    Examples:
    Input: 25.0
    Output: Interval [0,25]

    Input: 25.1
    Output: Interval (25,50]
*/

// Read the input number
$number = (float) readline();

// Determine which interval the number belongs to
if($number >= 0 && $number <= 25) {
    echo "Interval [0,25]\n";
} elseif($number > 25 && $number <= 50) {
    echo "Interval (25,50]\n";
} elseif($number > 50 && $number <= 75) {
    echo "Interval (50,75]\n";
} elseif($number > 75 && $number <= 100) {
    echo "Interval (75,100]\n";
} else {
    echo "Out of Intervals\n";
}
