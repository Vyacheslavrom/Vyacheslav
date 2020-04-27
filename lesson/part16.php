<?php
    $reg = '/a \dM/';// \d любая цыфра
    $str = 'a 8M';
    echo preg_match($reg, $str, $matches).'<br/>';
    print_r($matches);
    echo '<br/>';

    $str = 'a M';
    echo preg_match($reg, $str).'<br/>';

    $str = 'fffa 9Mrrr';
    echo preg_match($reg, $str).'<br/>';

    $reg = '/a \DM/';// \D любой символ кроме цыфры
    $str = 'fffa 9Mrrr';
    echo preg_match($reg, $str).'<br/>';

    $reg = '/a \wM/';// \w любая цыфра или буква
    $str = 'fffa  Mrrr';
    echo preg_match($reg, $str).'<br/>';

    $reg = '/a \WM/';// \W символ является не буквой не цыфрой
    $str = 'fffa 9Mrrr';
    echo preg_match($reg, $str).'<br/>';

    $reg = '/a \sM/';// \s пробел или тобуляция будет истина
    $str = 'fffa 9Mrrr';
    echo preg_match($reg, $str).'<br/>';

    $reg = '/a \SM/';// \S все кроме пробелов и табуляции будет истина
    $str = 'fffa 9Mrrr';
    echo preg_match($reg, $str).'<br/>';
 ?>
