<?php


  /* SNACK 4
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta 
  */

  function getUniqueRandom($min, $max, $nItem){
    $newArray = [];

    while(count($newArray) < $nItem){
      $number = rand($min, $max);

      if(!in_array($number, $newArray)){
        $newArray[] = $number;
      }
    };
    return $newArray;
  };

  $random_numbers = getUniqueRandom(1, 15, 15);

  var_dump($random_numbers);

?>