<?php
/* PHP.net*/
$A = 5;
$b = 7;
echo isset ($a);
echo "<br />";
echo isset ($b);

$x =15;
echo '<br />';
echo gettype($x);
$x = (double) $x;
echo '<br />';
echo gettype($x);

$str = 'Hello';
echo '<br />';
echo "Переменная str - это string?";
echo '<br />';
echo is_string($str);

echo '<br />';

echo ((int) $str);
echo '<br />';
$str_number = '12345';
$str_number =((int) $str_number);
echo ((int) $str_number);
echo '<br />';
echo gettype($str_number);
echo '<br />';


?>
