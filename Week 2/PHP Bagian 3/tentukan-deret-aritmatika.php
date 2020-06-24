<?php
function tentukan_deret_aritmatika($arr) {
   $panjang = count($arr);
   $beda = [];
   for ($i=0; $i < $panjang - 1; $i++) { 
      $j = $i;
      $j = $j + 1;
      $beda[] = $arr[$j] - $arr[$i];
   }
   $hasil = false;
   for ($i=0; $i < count($beda) - 1; $i++) { 
      $j = $i;
      $j = $j + 1;
      if($beda[$i] == $beda[$j]){
         $hasil = 'true';
      } else {
         $hasil = 'false';
      }
   }

   return $hasil;
}

// TEST CASES
echo tentukan_deret_aritmatika([1, 2, 3, 4, 5, 6]);// true
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 12, 24]);// false
echo "<br>";
echo tentukan_deret_aritmatika([2, 4, 6, 8]); //true
echo "<br>";
echo tentukan_deret_aritmatika([2, 6, 18, 54]);// false
echo "<br>";
echo tentukan_deret_aritmatika([1, 2, 3, 4, 7, 9]);// false
?>