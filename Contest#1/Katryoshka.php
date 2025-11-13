<?php
/*
Problem: Katryoshka Master

Description:
The football team will be in the World Cup. 
Of course, they all would like to buy souvenirs for their families. 
Luckily, they met the king of souvenirs Matryoshka who is famous for his masterpiece Katryoshka. 
He makes it using different wooden pieces: eyes, mouths and bodies. 
He can form a nice Katryoshka using one of the following combinations:

- Two eyes and one body.
- Two eyes, one mouth, and one body.
- One eye, one mouth, and one body.

If the king has n eyes, m mouths and k bodies, what is the largest number of Katryoshkas he can make?

Input:
Only one line containing three numbers n, m and k (0 ≤ n, m, k ≤ 10^18) – the number of eyes, mouths and bodies respectively.

Output:
Print the largest number of Katryoshkas he can make.

Example:
Input:
90 24 89
Output:
57
*/

// Read input
fscanf(STDIN,"%d %d %d",$eyes,$mouths,$bodies);

$max = 0;

// Define the three types of Katryoshka
// T1: 2 eyes + 1 body
// T2: 2 eyes + 1 mouth + 1 body
// T3: 1 eye + 1 mouth + 1 body

// Try all possible orders of using the types
$orders = [
    ['T2','T1','T3'],
    ['T2','T3','T1'],
    ['T1','T2','T3'],
    ['T1','T3','T2'],
    ['T3','T1','T2'],
    ['T3','T2','T1']
];

foreach($orders as $order){
    $e = $eyes;
    $m = $mouths;
    $b = $bodies;
    $count = 0;
    foreach($order as $t){
        if($t == 'T1'){ // 2 eyes + 1 body
            $tmax = min(intdiv($e,2), $b);
            $e -= 2*$tmax;
            $b -= $tmax;
            $count += $tmax;
        } elseif($t == 'T2'){ // 2 eyes + 1 mouth + 1 body
            $tmax = min(intdiv($e,2), $m, $b);
            $e -= 2*$tmax;
            $m -= $tmax;
            $b -= $tmax;
            $count += $tmax;
        } elseif($t == 'T3'){ // 1 eye + 1 mouth + 1 body
            $tmax = min($e, $m, $b);
            $e -= $tmax;
            $m -= $tmax;
            $b -= $tmax;
            $count += $tmax;
        }
    }
    if($count > $max) $max = $count;
}

echo $max . "\n";
