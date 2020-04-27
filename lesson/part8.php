
<?php
$a = [5, 5, 7, 2, 3, 7, 0, 5];
print_r($a);
echo '<br/>';
$a = array_unique($a);
print_r ($a);

/*$x = false
if (is_arry($x)) forich ($s as $v) echo $v;
*/

echo '<br/>';
shuffle($a);
print_r($a);
echo '<br/>';
print_r(array_reverse($a));

echo '<br/>';
print_r(array_flip($a));

echo '<br/>';
$a = ['name' => 'Igor', 'age' => '26'];
print_r(array_values($a));
echo '<br/>';
print_r(array_keys($a));

echo '<br/>';
$list_1 = [5, 7, 8];
$list_2 = [10, 8, 20];
$list = $list_1 + $list_2;
print_r($list);

$list = range(1, 100);
echo '<br/>';
//print_r($list);
//shuffle($list);
//for ($i = 0; $i < 100; $i++ ) echo 'hello';
//foreach(rangt(1, 100) as $v) echo 'hello1';
echo '<br/>';

$list = array_slice($list, 10, 5);
print_r($list);

shuffle($list);
echo '<br/>';
sort($list);
print_r($list);
echo '<br/>';
rsort($list);
print_r($list);
echo '<br/>';
arsort($list);
print_r($list);


function mysort($a, $b){
  if ($a % 10 == 0 && $b % 10 != 0) return 1;
  if ($a % 10 != 0 && $b % 10 == 0) return -1;
  return ($a <=> $b);
}

$list = [30, 40, 25, 20, 12, 15, 50, 40];
uasort($list, 'mysort');
print_r($list);
?>
