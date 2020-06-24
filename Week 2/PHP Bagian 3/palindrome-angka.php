<?php

function palindrome_angka($angka) {
   if(is_numeric($angka)) {
      if($angka >= 0 && $angka <= 9) {
         $angka++;
         return $angka;
      }
      $ulangi = true;
      while ($ulangi) {
         $string = (string) $angka;
         $balik = '';
         $panjang = strlen($string);
         for ($i = $panjang - 1; $i >= 0 ; $i--) { 
            $balik .= $string[$i];
         }
         if($angka != $balik) {
            $angka = $angka + 1;
            $ulangi = true;
         } else {
            $ulangi = false;
            return $balik;
         }
      }
   } else {
      return "Input Bukan Angka";
   }
}
 
// TEST CASES
echo palindrome_angka(8); // 9
echo "<br>";
echo palindrome_angka(10); // 11
echo "<br>";
echo palindrome_angka(117); // 121
echo "<br>";
echo palindrome_angka(175); // 181
echo "<br>";
echo palindrome_angka(1000); // 1001
