<?php

/*
* 1. buat fungsi perolehan_medali dengan 1 parameter
* 2. buat variabel yang bertipe array kosong dan variabel angka 0 yang berfungsi sebangai indeks awal dari suatu array
* 3. pisahkan array yang menggandung medali dengan menggantinya dengan angkan yang sesuai dengan negaranya
* 4. lakukan looping dengna foreach dan indeks yang bertambah setiap looping
* 5. buat variabel array kosong untuk menampung array hasil
* 6. buat looping dengan array hasil data yang telah dipisahkan tadi
* 7. buat kondisi apakah medali emas / perak / perunggu ada ?
* 8. jika medali tersebut ada maka masukkan ke dalam sebuah array dengan menjumlahkan medali tersebut jika sebelumnya di array negara tersebut ada medali tersebut
* 9. masukkan medali tersebut kedalam array yang sesua dengan negaranya
* 10. kembalikan nilai resultnya ke fungsi perolehan_medali()
* 11. panggil fungsi perolehan_medali() dengan print_r()
*/

function perolehan_medali($arr) {
   $hasil = [];
   $i = 0;
   foreach ($arr as $value) {
      $hasil[$i]['negara'] = $value[0];
      if($value[1] == "emas"){
         $hasil[$i]['emas'] = 1;
      } else if($value[1] == "perak"){
         $hasil[$i]['perak'] = 1;
      } else if($value[1] == "perunggu"){
         $hasil[$i]['perunggu'] = 1;
      }
      $i++;
   }

   $result = [];
   foreach ($hasil as $value) {
      if(isset($value['emas'])){
         $emas = isset($result[$value['negara']]['emas']) ? $result[$value['negara']]['emas'] + $value['emas'] : $value['emas'];
         $result[$value['negara']]['emas'] = $emas;
      } else if(isset($value['perak'])){
         $perak = isset($result[$value['negara']]['perak']) ? $result[$value['negara']]['perak'] + $value['perak'] : $value['perak'];
         $result[$value['negara']]['perak'] = $perak;
      } else if(isset($value['perunggu'])){
         $perunggu = isset($result[$value['negara']]['perunggu']) ? $result[$value['negara']]['perunggu'] + $value['perunggu'] : $value['perunggu'];
         $result[$value['negara']]['perunggu'] = $perunggu;
      }
   }
   return $result;
}
  
  
  // TEST CASES
print_r (perolehan_medali(array(
   array('Indonesia', 'emas'),
   array('India', 'perak'),
   array('Korea Selatan', 'emas' ),
   array('India', 'perak'),
   array('India', 'emas'),
   array('Indonesia', 'perak'),
   array('Indonesia', 'emas')
   ))
);