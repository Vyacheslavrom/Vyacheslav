<?php
$start = microtime(true);
$time = time();
echo $start.'<br/>';
echo $time.'<br/>';

;
//
echo '<br/>текущее время:'.date ('d,m,Y h:i:s');

$time = mktime(2, 5 , 10, 4, 12, 2019);
echo '<br/>получилась дата и время:'.date ('d,m,Y h:i:s', $time);

$time = strtotime('12.05.2016');
echo '<br/>'.$time;
echo '<br/>'.date ('d,m,Y h:i:s', $time);

$d = 32;
$m = 1;
$y = 2017;
if (checkdate($m, $d, $y)) echo '<br/>Дата коректна';
else echo '<br/> Дата не коректна';
//
function getGM($local){
  $offset = date("2", $local);
  return $local - $offset;
}
function getLM($gm, $offset){
  return $gm + $offset;
}
echo '<br/>'.date ('d,m,Y h:i:s', getGM(time()));
echo '<br/>'.date ('d,m,Y h:i:s', getLM(getGM(time()), 3600 * 2));

echo '<br/>время работы скрипта='.(microtime(true) - $start);
 ?>
