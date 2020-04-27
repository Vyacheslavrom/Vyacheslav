<?php
$s_1 = 'Hello World';
$s_2 = 'Привет, мир';
 echo $s_1[1].'<br/>';
 echo $s_2[1].'<br/>';

  echo strlen($s_1).'<br/>';
  echo strlen($s_2).'<br/>';

  echo mb_strlen($s_1).'<br/>';
  echo mb_strlen($s_2).'<br/>';

  echo mb_strpos($s_2, 'ет').'<br/>';
  if (mb_strpos($s_2, 'Прив') !== false) echo 'Подстрока найдена';
  else echo 'Подстрока не найдена';
  echo '<br/>';

  echo substr ($s_1, 3, 2).'<br/>';
  echo substr ($s_1, 3).'<br/>';
  echo mb_substr ($s_2, 3).'<br/>';

  $email = '   abc@asd.ru   ';
  echo trim($email).'<br/>';//умирает пробелы

echo str_replace('и', 'а', $s_2).'<br/>';
$text = 'Здравствуйте, %name%! Вы зарегестрировались у меня на %site%.';
echo str_replace(['%name%','%site%'], ['Вячеслав','toote.rune'], $text).'<br/>';

  echo mb_strtolower($s_2).'<br/>';
  echo mb_strtoupper($s_2).'<br/>';

  //
  echo '<a href="part7.php?a='.urlencode('ttt ttt & ttt').'">Ссылка</a><br/>';
  echo urldecode('ttt+ttt+%26+ttt').'<br/>';
//
  $s_3 = '<a><img>"\' &';
  echo htmlspecialchars($s_3, ENT_QUOTES).'<br/>';

  echo strip_tags($s_3, '<img>').'<br/>';

  echo md5($s_3).'<br/>';
  $text = 'Это очень длинная строка в которой что только не происходит с буквами';
  echo $text.'<br/>';
  echo wordwrap($text, 20).'<br/>';

  echo nl2br(wordwrap($text, 20)).'<br/>';
  //
$m_1 = 67;
$m_2 =89.09;
  echo sprintf('%.2f', $m_1).'<br/>';//'%.2f' два знака после запятой тип float 2f

  echo sprintf('%.2f', $m_2).'<br/>';
?>
