<?php
echo 'Lesson Part1';
echo "<br /><br />";
print_r ($_POST);
echo "<br /><br />";
print_r ($_REQUEST);
echo "<br /><br />";
$summa = false;
if (isset($_POST["myform"])){
echo "форма отправлена";
echo "<br /><br />";
$x = $_POST["x"]?? false;
$y = $_POST["y"]?? false;
if ($x !== false && $y !== false && is_numeric($x) && is_numeric ($y)) $summa = $x + $y;
else $summa = false;
}
#echo "Сумма равна: $summa";
if ($summa !== false): echo "Сумма равна: $summa";
endif;
?>

<form name="myform" action="<?=$_SERVER["REQUEST_URI"]?>" method="post">
     <div>
         X: <input type="text" name="x" />
     </div>
     <div>
         Y: <input type="text" name="y" />
     </div>
     <div>
         <input type="submit" name="myform" value="Сумма" />
     </div>
</form>
