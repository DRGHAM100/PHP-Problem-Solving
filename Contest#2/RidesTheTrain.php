<?php
/*
Problem: Train Seat Position (Snake Pattern)

Description:
A train has rows of 4 seats each. The seat numbers follow a zigzag pattern:

Row 0: 0 1 2 3
Row 1: 7 6 5 4
Row 2: 8 9 10 11
Row 3: 15 14 13 12
...

Given a seat id (0 ≤ id ≤ 10^18), determine its row and column.

Input:
One number: seat id.

Output:
Two numbers: row and column.

Example:
Input:
5
Output:
1 2
*/

// Read input
fscanf(STDIN, "%d", $id);

// Determine row number
$row = intdiv($id, 4);

// Seat position inside the row (0..3)
$pos = $id % 4;

// Determine column based on row parity
if ($row % 2 == 0) {
    // Even row → normal order
    $col = $pos;
} else {
    // Odd row → reversed order
    $col = 3 - $pos;
}

// Output result
echo $row . " " . $col;
