<?php
function gener1(){
  echo '1';
  yield  'STRING';
  echo '2';
  yield  2;
  echo '3';
  yield  3;
}
foreach (gener1() as $value){
  echo "= из цыкла $value<br />";
}
// Новый генератор
function gener2($from, $to){
    for ($i = $from; $i < $to; $i++){
      echo "$i-";
      yield $i;
    };
}
foreach (gener2(1, 10) as $value) {
  echo 'Удвоим:'.($value * 2).'<br />';
}

// Новый генератор
function doubleArray($arr, $callback){
  foreach ($arr as $v) yield $callback($v);
}
$arr = [1, 2, 3, 4, 5, 6];
$gener = doubleArray($arr, function($v){return $v * 2;});
/* $gener ЭТО не массив*/
foreach ($gener as $v) echo "$v -";

// Еще генератор
$arr = ['Michael' => '27','Igor' => '20'];
function gener3($arr, $callback){
    foreach ($arr as $k => $v){
      yield $k => $callback($v);
    }
}
$gener = gener3($arr, function($age) {return $age < 23? "student":"worker";});
echo "<br />";
foreach ($gener as $key => $value) echo "$key - $value<br />";
/* Генератор - это отличная возможность сэкономить ресурсы*/
// продолжаем с новым генератором
echo "<br />";
$count = 1000000;
$arr = [];
for ($i = 0; $i < $count; $i++) $arr[] = $i;
$s = 0;
foreach ($arr as $v) $s += $v;
echo "result: $s<br />";
echo memory_get_usage().'<br />';
unset ($arr);
function ememory($count) {
  for ($i =0; $i < $count; $i++) yield $i;
}
$s = 0;
foreach (ememory($count) as $y) $s +=$y;
echo "result: $s<br />";
echo memory_get_usage().'<br />';
 ?>
