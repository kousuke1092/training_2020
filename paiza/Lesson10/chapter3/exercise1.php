<?php
// 例外メッセージを指定しよう

echo "start\n";
try {
    $date = new DateTime("199x-01-01");
    echo $date->format('Y/m/d') . "\n";
} catch (Exception $e) {
    echo "指定された日付が不正です\n";
    fputs(STDERR , $e->getMessage());
} finally {
    echo "end\n";
}
?>
出力結果：
start
指定された日付が不正です
end

標準時エラー出力：
DateTime::__construct(): Failed to parse time string (199x-01-01) at position 0 (1): Unexpected character

