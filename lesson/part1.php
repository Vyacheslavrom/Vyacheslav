<?php
$a = 1;
$b = 9;
$c = true;
$d = true;

switch (gettype ($c)) {
  case 'string':
    echo "<br />".'С- это строка';
    break;
    case 'integer':
      echo "<br />".'С- Целое число';
      break;
      case 'double':
        echo "<br />".'С- число с запятой';
        break;

  default:
  echo "<br />".'С- неопределено';
    break;
}

switch ($a <=> $b) {
  case '-1':
    echo "<br />".'a < b';
    break;
 case '0':
    echo "<br />".'a = b';
    break;
 case '1':
    echo "<br />".'a > b';
    break;
 default :
    echo "<br />".'ХЗ';
}

while ($a < $b) :
  $a ++;
echo "<br />$a";
endwhile;

$a = 0;
$summa = 0;
while ($a <= 10) {
  $summa += $a;
  $a++;
  }
echo "<br /> Сумма равна = $summa";

$f = 0;
do {
$f ++;
echo "<br />$f";
} while ($f < 10);

$arr = array(1, 5, -1, 0, 5);
$arr = [1, 5, -1, 0, 5, true, "My string"];
echo "<br />$arr[2]";

for ($i = 0; $i < count($arr); $i++){
  echo '<br />'.$arr[$i];
}
$arr_2 = ["name" => "Michael", "age" => "26"];
echo "<br />". $arr_2 ['name'];
 $staff = [
     [
       'name' => 'Michael',
       'age' => 26
     ],
     [
       'name' => 'Igor',
       'age' => 30
     ],
     [
       'name' => 'Alex',
       'age' => 20
     ]

 ];

  echo "<br />".$staff [2]['name'];

  $arr_5 = [1, 5, 0, true, false, "Mystring", 2.5];
    foreach ($arr_5 as $value) {
      echo "<br />".$value;
    }
echo "<br />";
  foreach ($staff as $key => $value_staff) {
    echo $key.'-';
    foreach ($value_staff as $k => $v){
    echo $k .'='.$v."-";
    }
echo "<br />";
  }





?>
