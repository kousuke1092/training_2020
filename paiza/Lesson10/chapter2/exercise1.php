<?php
// 例外処理を定義しよう

echo "start\n";
try{
    $date = new DateTime("199x-01-01");
    echo $date->format('Y/m/d') . "\n";
}catch(exception $e){
    echo $e->getMessage()."\n";
}finally{
    echo "end\n";
}
?>

出力結果：
start
DateTime::__construct(): Failed to parse time string (199x-01-01) at position 0 (1): Unexpected character
end
