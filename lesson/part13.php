<?php
//mkdir('new dir');
//mkdir('ggg/kkk/new dir', 0777, true);
//rmdir('new dir');

$arr = glob('*.php');
print_r($arr);

function printDir($folder, $space = ''){
      $files = scandir($folder);
      foreach ($files as $file){
        if ($file == '.' || $file == '..') continue;
        $f = $folder.'/'.$file;
        echo $space.$file.'<br/>';
        if (is_dir($f)) printDir($f, $space."&nbsp;&nbsp;");
      }
}
echo  '<br/>';
echo file_exists('part2.php');
echo  '<br/>';
printDir('/home/www/project1.ru');

 ?>
