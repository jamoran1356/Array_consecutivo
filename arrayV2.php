<?php
/*Given a sequence of integers as an array, determine whether it is possible to obtain a strictly increasing sequence by removing no more than one element from the array.

Note: sequence a0, a1, ..., an is considered to be a strictly increasing if a0 < a1 < ... < an. Sequence containing only one element is also considered to be strictly increasing.
*/


function solution($sequence) {
    $removed = 0;
    for ($i = 1; $i < count($sequence); $i++) {
        if ($sequence[$i] <= $sequence[$i-1]) {
            $removed++;
            if ($removed > 1) {
                echo "falso";
                return false;
            }
            if ($i > 1 && $sequence[$i] <= $sequence[$i-2]) {
                $sequence[$i] = $sequence[$i-1]+1;
            }
        }
    }
    echo "verdadero";
    return true;
}
            
           
$sequence = [10, 2, 3, 4, 3, 6]; //expected true
echo solution($sequence);
?>