<?php
$helo = function ($string)
{
  echo "$string<br />";
};
$helo ('че надо');
echo gettype($helo)."<br />";
function test($a, $func){
  $arr = [];
  for ($i = 0; $i < $a; $i++){
    $arr[] = $func($i);
      }
      return  $arr;
}
$arr = test(10, function($i){
  return $i * $i;
});
foreach ($arr as $key => $value) echo "$key-$value ,";
?>
