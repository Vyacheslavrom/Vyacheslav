<?php
/* PHP.net*/
  //жесткие ссылки
$a = 10;
$b =& $a;
$a = 5;
echo $b;
echo "<br />";
$b = 7;
echo $a;
unset ($a);
echo "<br />";
echo $b;
/* Символические ссылки*/

$a =3;
$b = 'a';
echo "<br />";
echo $$b;
$$b = 10;
echo "<br />";
echo $a;

/*Ссылки на обьекты* рассмотрим позже/


?>
