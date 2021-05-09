<?php
const COUNT = 100;
const MIN_RAND = 1;
const MAX_RAND = 30;


function randArray($count = COUNT, $minRand = MIN_RAND, $maxRand = MAX_RAND): array
{
    $myArray = [];
    for ($i = 0; $i < $count; $i++) {
        $myArray[]=rand($minRand, $maxRand);
    }
    return $myArray;
}

$arr = randArray();
$count=0;

for ($i = 0; $i < count($arr); $i++){
    if($arr[$i]===20){
        $count++;
        unset($arr[$i]);
    }
}

print_r($arr);
print_r("br".$count);
print_r(in_array( 20, $arr) ? "true" : "false");