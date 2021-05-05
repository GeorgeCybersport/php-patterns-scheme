<?php

$number = 600851475143;

for ($i=2; $i<=$number/2; $i++){
    if($number%$i===0){
        if(gmp_prob_prime($number/$i)!=0){
            echo $number/$i;
            break;
        }
    }
}

