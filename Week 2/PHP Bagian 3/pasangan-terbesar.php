<?php
function pasangan_terbesar($angka){
   $panjang = strlen($angka);
   $besar = 0;
   $banding = 0;
   for ($i=0; $i < $panjang; $i++) {
      $besar = substr($angka, $i, 2);
      if($banding < $besar) {
         $banding = $besar;
      }
   }
   return $banding;
}

// TEST CASES
echo pasangan_terbesar(641573); // 73
echo "<br>";
echo pasangan_terbesar(12783456); // 83
echo "<br>";
echo pasangan_terbesar(910233); // 91
echo "<br>";
echo pasangan_terbesar(71856421); // 85
echo "<br>";
echo pasangan_terbesar(79918293); // 99

?>