<?php

function binarySearch(array $numbers, $x){
    $low = 0;
    $high = count($numbers) - 1;
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);

        if ($numbers[$mid] > $x) {
            $high = $mid;
            echo "$numbers[$mid] is too high";
            echo "<br>";
        } else if ($numbers[$mid] < $x) {
            $low = $mid;
            echo "$numbers[$mid] is too low";
            echo "<br>";
        } else {
            return "$numbers[$mid] is exactly the number i wrote ";
        }
    }
}

$numbers = range(1,100);
$x = 66;

$guess1 = binarySearch($numbers, $x);
echo $guess1;


