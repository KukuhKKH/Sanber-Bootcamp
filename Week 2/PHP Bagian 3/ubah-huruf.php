<?php
function ubah_huruf($string){
   $angka = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
   $angka = explode(" ", $angka);
   $urutan = [];
   for ($i=0; $i < strlen($string); $i++) { 
      $urutan[] = array_search($string[$i], $angka);
   }
   $hasil = '';
   // return var_dump($urutan);
   for ($i=0; $i < count($urutan); $i++) { 
      $indek = $urutan[$i];
      $hasil .= $angka[$indek+1];
   }
   return $hasil;
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo "<br>";
echo ubah_huruf('developer'); // efwfmpqfs
echo "<br>";
echo ubah_huruf('laravel'); // mbsbwfm
echo "<br>";
echo ubah_huruf('keren'); // lfsfo
echo "<br>";
echo ubah_huruf('semangat'); // tfnbohbu

?>