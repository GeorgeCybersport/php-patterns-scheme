<?php
function findNthPrime($number){
    $value=2;
    for ($i=0; $i<$number-1; $i++){
        $value=gmp_nextprime($value);
    }
    print_r($value);
}
findNthPrime(10001);