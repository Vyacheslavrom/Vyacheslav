<?php
$arr = [];

for ($i = 0; $i < 100; $i++){
  $arr [] = $i * 5;
}

foreach ($arr as $key_2 => $h){
  echo $arr[$key_2] = $h *2;  $h.'-'.$key_2.", ";
}
foreach ($arr as &$h){
  echo ($h * 2).", ";
}
$arr_1 = ['misha', 'ivanov', 25];
$ferstname = $arr_1 [0];
$surname = $arr_1 [1];
$age = $arr_1 [2];

Echo "<br />"."$ferstname, $surname, $age";

list ($ferstname, $surname, $age) = $arr_1;
Echo "<br />"."$ferstname, $surname, $age";
?>
