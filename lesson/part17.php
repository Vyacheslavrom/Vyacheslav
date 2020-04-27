<?php
$reg = '/a . b/';// . квантификатор один любой символ
$str = 'fffa 9Mrrr';
echo preg_match($reg, $str).'<br/>';

$reg = '/^ab/';// ^ начало строки
$str = 'abfa 9Mrrr';
echo preg_match($reg, $str).'<br/>';

$reg = '/ab$/';// $ конец строки
$str = 'fffa 9Mrrrab';
echo preg_match($reg, $str).'<br/>';

$reg = '/a [a-z][0-5] b$/';// [] интервал
$str = 'a f4 b';
echo preg_match($reg, $str).'<br/>';

$reg = '/a [^a-z][0-5] b$/';// [^  ]  исключаемый интервал
$str = 'a f4 b';
echo preg_match($reg, $str).'<br/>';

$reg = '/a ([a-z]a\d) b$/';// ( ) скобки группируют мета симолы
$str = 'a fa9 b';
echo preg_match($reg, $str, $matches).'<br/>';
print_r($matches);

echo '<br>';
$reg = '/a ([a-z]a)* b$/';// * повторение конструции в () от 0 раз до безконечности
$str = 'a fa b';
echo preg_match($reg, $str).'<br/>';

$reg = '/a ([a-z]a)+ b$/';// + повторение конструции в () хотябы 1 раз
$str = 'a fa b';
echo preg_match($reg, $str).'<br/>';

$reg = '/a \d{3} b$/';// {3} 3 раза должен повториться \d
$str = 'a fa b';
echo preg_match($reg, $str).'<br/>';

$reg = '/a [a-z]{3,} b$/';// {3,} повторение от 3х раз
$str = 'a fa b';
echo preg_match($reg, $str).'<br/>';

$reg = '#a [a-z]{3,5} b$#';// {3,5} повторение от 3х до 5 раз
$str = 'a fa b';
echo preg_match($reg, $str).'<br/>';

$reg = '#a\s[a-z]{3,5}\sb$#ix';// модификатор i игнорирует регистр
$str = 'a fa b';              // x игнорирует пробелы
echo preg_match($reg, $str).'<br/>';//пробелы устанавливаются \s

$reg = '#a [a-z]{3,5} b#';// {3,} повторение от 3х до 5 раз
$str = 'a fa b';
echo preg_match($reg, $str).'<br/>';

$reg = '#ab$#m';// m учитывает переход на новую строку
$str = 'ab\nfab';// \n переход на новую строку
echo preg_match($reg, $str).'<br/>';

$reg = '/".*"/m';// жадный квантификатор
$str = 'abc "23" abc "45"';//
echo preg_match($reg, $str, $matches).'<br/>';
print_r($matches);
echo '<br/>';

$reg = '/".*?"/m';// ? избовляем от жадности квантифыкатор
$str = 'abc "23" abc "45"';//
echo preg_match($reg, $str, $matches).'<br/>';
print_r($matches);

echo '<br/>';
$reg = '/".*?"/m';// ? избовляем от жадности квантифыкатор
$str = 'abc "23" abc "45"';//
echo preg_match_all($reg, $str, $matches).'<br/>';//preg_match_all возвращяет всю строку
print_r($matches);

?>
