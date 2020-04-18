<?php
function hello(){
  echo "hello<br />";
}
function hello_1($y = 3){
  if (!is_int($y)){
  echo 'Ошибка в параметре';
  return;
   }
  for ($i = 0; $i < $y; $i++) hello();

}
function _summa($a, $b){

  echo "<br />Сумма $a + $b =".($a + $b);
}

function summ_1($c, $d){
  $summa = $c + $d;
  return  $summa;
}
function summ_3()
{ if (func_num_args() == 0){
  echo 'нужны параметры';
  return;
}
  $summa1 = 0;
  for ($i=0 ; $i < func_num_args(); $i++){
    $arg = func_get_arg($i);
    if (!is_numeric($arg)) {
      echo "<br />".'параметром должно быть числом';
      return;
    }
    $summa1 += $arg;
  }
  return $summa1;
}

hello_1(2);
_summa(4, 12);
$summa = summ_1 (3, 7);
echo "<br />$summa";
echo "<br />".summ_3(5, 4, 7, -5, 10.3);
?>
