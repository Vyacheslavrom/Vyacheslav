<?php
$arr = [1, 3, 5, 10];
foreach ($arr as &$v) $v *= 2;
unset($v);
//foreach ($arr as $v) echo $v.'-';
#echo '<pre>';
print_r ($arr);

var_dump ($arr);

var_export ($arr);

$d = array ( 0 => 2, 1 => 6, 2 => 10, 3 => 20, );
print_r ($d);

?>
