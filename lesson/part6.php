<?php
$x = -3;
echo abs($x);
$y = 23.83867476556;
echo "<br/>". round($y, 3);
echo "<br/>". round($y, -1);
echo "<br/>". floor($y);
echo "<br/>". ceil($y);
echo "<br/>". round($y, -1);
echo "<br/>". mt_rand(1, 5);
$arr = [];
for ($i = 0; $i <= 10; $i++){
   $arr[] = mt_rand(1, 100);
    }
    echo '<br/>';
    print_r($arr);
    echo '<br/>';
echo min(2, -8, 7, 14, 87, 6 ,0).'<br/>';
echo max(2, -8, 7, 14, 87, 6 ,0).'<br/>';
echo base_convert(100, 2, 10).'<br/>';//переводит 100 из двоичной системы в десятичную
echo cos($x).'<br/>';
echo sin($x).'<br/>';
echo tan($x).'<br/>';
echo (1 / cos($x)).'<br/>';
$x = 0.5;
echo acos($x).'<br/>';
echo asin($x).'<br/>';
echo atan($x).'<br/>';
echo (M_PI / 2 - cos($x)).'<br/>';
echo rad2deg(asin($x)).'<br/>';
echo deg2rad(30).'<br/>';
?>
