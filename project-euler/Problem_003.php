<?php

// Largest prime factor
// Problem 3
// 
// The prime factors of 13195 are 5, 7, 13 and 29.
// 
// What is the largest prime factor of the number 600851475143 ?

  $max = 600851475143;
  $factor = 1;
  $highest = 0;
  while ($factor < $max){
    
    if ($max % $factor == 0){
      $highest = $factor;
    }
    $factor++;
  }
  var_dump($factor);

?>