<?php
$array=[22,1,1,4,20,0];

function printArray($arr){
    for($i=0; $i < count($arr); $i++){
        print $arr[$i] . " ";
    }
}

function totalSum($arr){
    $sum=0;
    foreach ($arr as $value){
      $sum+=$value;
    }
    return $sum;
}

function searchNumber($arr,$number){
    foreach ($arr as $value){
      if ($value == $number){
        print "Number " .$number . " exists in array";
        return;
      }
    }
    print "Number " .$number . " is not exist in array";
}

function sortArray($arr){
    $a;
    for($i=0; $i < count($arr); $i++){
        for ($j = $i; $j < count($arr); $j++){
           if($arr[$j] < $arr[$i]){
                $a = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $a;
           }
        }
    }
    return $arr;
}

echo "Task 1. Sum = " . totalSum($array);
echo "</br>";

echo "Task 2. ";
searchNumber($array, '22');
echo "</br>";

echo "Task 3. Sorted array: ";
printArray(sortArray($array));




