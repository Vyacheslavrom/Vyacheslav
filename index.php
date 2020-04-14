<?php
/* PHP.net*/
$s_1 = 'My string';
$s_2 = 'New string';
echo $s_1. '-'.$s_2.'<br />';
$s = $s_1.$s_2;
echo $s;

echo "<br />Символ с индексом 3 (позиция №4) встроке \"$s_1\"={$s_1[3]} n <br />";

$res = `date`;
echo $res;
echo "<br />";
echo iconv("UTF-8","cp866", $res);

?>
