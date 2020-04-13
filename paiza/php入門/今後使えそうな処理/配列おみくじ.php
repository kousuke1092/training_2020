<?php


$input = trim(fgets(STDIN));//標準入力からデータ取得


while($input){
    
    //ループ処理でひとつづつ配列に格納
    $array[] = $input;//格納
    $input = trim(fgets(STDIN));//取得

}


$max = count($array)-1;//最大値を$maxに代入
$num = rand(0,$max);//ランダムで0~最大値の数値を$numに代入

print_r($array);
echo "あなたは".$array[$num]."です。"//出力

?>

入力：
大吉
吉
凶

出力：
Array
(
    [0] => 大吉
    [1] => 吉
    [2] => 凶
)
あなたは　です。
