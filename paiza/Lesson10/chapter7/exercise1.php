<?php
// 呼び出し元に例外を伝えよう

function test_exception($date) {
    try {
        return new DateTime($date);
    } catch (Exception $e) {
        throw $e;
    }
}

echo "start\n";
try{
    $dateTime = test_exception("199x-01-01");
}catch(Exception $e){
    echo "不正な日付です\n";
}
echo "end\n";
?>

出力結果：
start
不正な日付です
end
