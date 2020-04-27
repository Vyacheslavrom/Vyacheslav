<?php
    $str = `dir`;

    echo iconv('cp866', 'UTF-8', $str).'<br/>';

    //system('dir');

    $str = exec('dir');
    echo iconv('cp866', 'UTF-8', $str).'<br/>';

    exec('файл который можно запустить например .bat');
 ?>
