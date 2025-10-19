<?php
/*
    Problem: Point in a 2D Plane

    Description:
    Given two numbers X and Y representing coordinates of a point in a 2D plane,
    determine in which quadrant the point belongs.

    Notes:
    - Print "Q1", "Q2", "Q3", or "Q4" according to the quadrant.
    - Print "Origem" if the point is at the origin.
    - Print "Eixo X" if the point is on the X-axis.
    - Print "Eixo Y" if the point is on the Y-axis.

    Input:
    - Two numbers X and Y separated by space.

    Output:
    - The location of the point as described above.

    Example:
    Input:
    10 20
    Output:
    Q1
*/

// Read input (can be float or int)
fscanf(STDIN, "%f %f", $x, $y);

// Determine position
if ($x == 0 && $y == 0) {
    echo "Origem";
} elseif ($x == 0) {
    echo "Eixo Y";
} elseif ($y == 0) {
    echo "Eixo X";
} elseif ($x > 0 && $y > 0) {
    echo "Q1";
} elseif ($x < 0 && $y > 0) {
    echo "Q2";
} elseif ($x < 0 && $y < 0) {
    echo "Q3";
} else { // ($x > 0 && $y < 0)
    echo "Q4";
}

echo PHP_EOL;
