<?php
/* PHP.net*/
$a = 5;
$b = 3;
 if ($a < 5) echo 'Истина';
 else echo "Лож <br />";
 if ($a < 5 || $b = 3) echo 'Истина';
 else echo 'Лож';

 #if (isset($_GET['com'])) $com = $_GET['com'];
#else $com = false;

#$com =isset($_GET['com'])? $_GET['com'] : false;

$com = $_GET['com']?? false;
echo "<br /><br /> $com";

if ($com == 'add') { $summa = $a + $b;
  echo "<br /> $summa";
}
elseif ($com == 'mult'){ $umnog = $a * $b;
 echo "<br /> $umnog";
}



?>

<div>
  <br />
  <a href="?com=add">Сложить</a>
  <a href="?com=mult">Перемножить</a>

</div>
