<?php

/*
* 1. buat fungsi hitung() dengan 1 parameter
* 2. buat kondisi dimana parameter tersebut berisi karakter operasional apa
* 3. setiap kondisi akan mengeksekusi operasional yang terdapat pada parameter tersebut dengan fungsi strpos() dimana fungsi tersebut akan mengembalikan nilai true apabila dalam string tersebut terdapat karater yang ada diparameter kedua
* 4. kemudian hasil kondisi yang true akan memanggil fungsi php yaitu explode dimana akan membagi parameter string menjadi 2 indeks pada array yang sebelumnya dipisahkan oleh simbol operasional matematika
* 5. lakukan operasi matematika yang sesuai kondisi yang true dan memasukkannya ke dalam variabel hasil
* 6. return atau kembalikan variabel hasil tersebut ke fungsi hitung()
* 7. panggil fungsi hitung dan masukkan parameter dengan tipe string lalu cetak menggunakan echo
*/

function hitung($string_data) {
   if(strpos($string_data, '*')) {
      $operasi = explode("*", $string_data);
      $hasil = $operasi[0] * $operasi[1];
   } else if(strpos($string_data, '+')) {
      $operasi = explode("+", $string_data);
      $hasil = $operasi[0] + $operasi[1];
   } else if(strpos($string_data, ':')) {
      $operasi = explode(":", $string_data);
      $hasil = $operasi[0] / $operasi[1];
   } else if(strpos($string_data, '%')) {
      $operasi = explode("%", $string_data);
      $hasil = $operasi[0] % $operasi[1];
   } else if(strpos($string_data, '-')) {
      $operasi = explode("-", $string_data);
      $hasil = $operasi[0] - $operasi[1];
   }
   return $hasil;
}

echo hitung("102*2");
echo "<br>";
echo hitung("2+3");
echo "<br>";
echo hitung("100:25");
echo "<br>";
echo hitung("10%2");
echo "<br>";
echo hitung("99-2");