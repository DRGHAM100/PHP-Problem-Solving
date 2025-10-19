<?php
/*
    Problem: Age in Days

    Description:
    Given a number N corresponding to a person's age in days,
    print the age in years, months, and days.
    Consider 1 year = 365 days and 1 month = 30 days.

    Input:
    - A single integer N (0 ≤ N ≤ 10^6)

    Output:
    - Three lines showing years, months, and days with their labels.

    Example:
    Input:
    400
    Output:
    1 years
    1 months
    5 days
*/

// Read input
fscanf(STDIN, "%d", $num_of_days);

// Calculate years, months, days
$years = intdiv($num_of_days, 365);
$months = intdiv($num_of_days % 365, 30);
$days = ($num_of_days % 365) % 30;

// Output
echo $years . " years" . PHP_EOL;
echo $months . " months" . PHP_EOL;
echo $days . " days" . PHP_EOL;
