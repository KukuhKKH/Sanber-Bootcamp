<?php
function skor_terbesar($arr){
  foreach ($arr as $value) {
    $indek[] = $value['nilai'];
  }
  $array = array_multisort($indek, SORT_DESC, $arr);
  return $arr;
}

// TEST CASES
$skor = [
  'React Js' => [
    'nama' => 'Indra',
    'kelas' => 'React Js',
    'nilai' => 85
  ],
  'React Native' => [
    'nama' => 'Regi',
    'kelas' => 'React Native',
    'nilai' => 86
  ],
  'Laravel' => [
    'nama' => 'Aghnat',
    'kelas' => 'Laravel',
    'nilai' => 90
  ],
  'Vue JS' => [
    'nama' => 'Kukuh',
    'kelas' => 'Vue Js',
    'nilai' => 100
  ],
  'Code Igniter' => [
    'nama' => 'Rifky',
    'kelas' => 'Code Igniter',
    'nilai' => 75
  ],
];

print_r(skor_terbesar($skor));
/* OUTPUT
  Array (
    [Laravel] => Array
              (
                [nama] => Aghnat
                [kelas] => Laravel
                [nilai] => 90
              )
    [React Native] => Array
                  (
                    [nama] => Regi
                    [kelas] => React Native
                    [nilai] => 86
                  )
    [React JS] => Array
                (
                  [nama] => Indra
                  [kelas] => React JS
                  [nilai] => 85
                )
  )
*/
?>