<?php
$reg = '/^[a-z0-9_]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}$/';
$email_1 = 'abc@mail.ru';
$email_2 = 'abc@mail.yandex.com';
$email_3 = 'abc_dd@mail.far.ru';
$email_4 = 'abc';
$email_5 = 'abc@mail';
$email_6 = 'dd abc@mail.ru ff';
echo preg_match($reg, $email_1).'<br>';
echo preg_match($reg, $email_2).'<br>';
echo preg_match($reg, $email_3).'<br>';
echo preg_match($reg, $email_4).'<br>';
echo preg_match($reg, $email_5).'<br>';
echo preg_match($reg, $email_6).'<br>';

$reg = '/[a-z0-9_-]+(\.[a-z0-9_-]+)*@([0-9a-z][0-9a-z]*\.)+([a-z]){2,4}/';
$text = 'Пишите мне на e-mail sm-jmotors@mail.ru буду рад вас слышать. Так же мой запасной e-mail detalline@yandex.com.';

$text = preg_replace($reg, 'СТОП e-mail', $text);

echo $text.'<br>';

//$date = '12.07.2017';
echo ($date = '12.07.2017').'<br>';
$reg1 = '/(\d{2})\.(\d{2})\.(\d{4})\./';
echo preg_replace($reg1, '$3.$1.$3', $date);
?>
