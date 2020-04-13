<?php
$gannnenn = 1989;
 
//平成元年の1989年から2015年までをループで出力する。
//ループの書く西暦出力時に平成年を計算して出力。
for ($year = $gannnenn; $year <= 2015; $year++) {
     // code...
     $heisei = $year - 1988;
     echo $year ."年 = 平成".$heisei."年です。\n";
     
}
?>
