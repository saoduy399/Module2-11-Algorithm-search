<?php

function findMin($numbers){
    $min = $numbers[0];
    for ($i = 0; $i < count($numbers); $i++){
        if( $numbers[$i] < $min){
            $min = $numbers[$i];
        }
    }
    return $min;
}

function findMax($numbers){
    $max = $numbers[0];
    for ($j=0; $j<count($numbers); $j++){
        if($numbers[$j] > $max){
            $max = $numbers[$j];
        }
    }
    return $max;
}

$numbers = [];
for ($i=0; $i<100; $i++){
    $numbers[$i] = rand(0,100);
}

foreach ($numbers as $number){
    echo $number. " ";
}

$min = findMin($numbers);
echo "<br>";
echo "The minimum number is: $min";

$max = findMax($numbers);
echo "<br>";
echo "The maximum number is: $max";

//
//function findMin($numbers){
//    $min = $numbers[0];
//    for ($i=0; $i<count($numbers); $i++){
//        if ($numbers[$i] < $min){
//            $min = $numbers[$i];
//        }
//    }
//    return $min;
//}
//
//function findMax($numbers){
//    $max = $numbers[0];
//    for ($j = 0; $j<count($numbers); $j++){
//        if ($numbers[$j] > $max){
//            $max = $numbers[$j];
//        }
//    }
//    return $max;
//}
//
//$numbers=[];
//for ($i = 0; $i < 100;  ++$i){
//    $numbers[$i] = rand(1,100);
//}
//
//foreach($numbers as $number){
//    echo $number . " ";
//}
//
//$min = findMin($numbers);
//echo "<br>";
//echo "The minimum number is: $min";
//
//$max = findMax($numbers);
//echo "<br>";
//echo "The maximum number is: $max";
