<?php

function findQuantity($numbers, $value)
{
    $count=0;
    for ($i = 0; $i < count($numbers); $i++) {
        if ($numbers[$i] == $value){
            $count++;
        }
    }
    return $count;
}


$numbers = range(0,100);
shuffle($numbers);
$value = 2;
echo "<pre>";
print_r($numbers);
$quantity = findQuantity($numbers,$value);
echo "The quantity is (are): $quantity";
