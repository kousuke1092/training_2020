<?php
// 意図的に例外を発生させてみよう

echo "start\n";
try {
    // ここで例外を発生させる
    throw new exception("意図的な例外");
} catch(Exception $e) {
    fputs(STDERR, "例外発生:" .$e->getMessage() . "\n");
} finally {
    echo "end\n";
}
?>

出力：
start
end

標準エラー出力：
例外発生:意図的な例外
