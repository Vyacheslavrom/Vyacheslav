<?php
    $handler = fopen('a.txt', 'a+');
    $count = 3;
    $str = '';
    while(!feof($handler)){
      $str .= fread($handler, $count);
    }
    echo $str;
    //echo fread($handler, 3);
    fseek($handler, 0);
    echo '<br/>'.fread($handler, filesize('a.txt'));
    //fwrite($handler, "\n New string");
    fclose($handler);

echo '<br />';
//$str = file_get_contents('https://yandex.ru');
$str = file_get_contents('a.txt');
echo $str.'<br/>';

//$str = file_put_contents('a.txt', file_get_contents('a.txt').('hello world'));

//copy('a.txt', 'b.txt');

//rename('b.txt', 'new.txt');

//unlink('new.txt');

echo '<br/>';
$handler = tmpfile();

fwrite($handler, 'absd');
fseek($handler, 0);
echo fread($handler, 3);

?>
