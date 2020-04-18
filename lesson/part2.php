<?php
$x = 0;
function func($x){
  $a = 5;
  $x++;
}
function testGlobal(){
 //global $x; $x++;
 $GLOBALS['x']++;
}
function getCaunt(){
  static $count = 0;
  $count++;
  return $count;
}


  function factorial($n){
    if ($n <= 1) return 1;
    return $n* factorial($n - 1);
  }
  echo "<br />".factorial(4)."<br />";


func(10);
echo "<br />";
testGlobal();
echo $x;
$a = 7;
$var = 10;
foreach ($GLOBALS as $key => $value){
  if (is_array($value)) continue;
   echo "<br />$key = $value";
}
echo "<br />";
echo getCaunt();
echo "<br />";
echo getCaunt();
?>
