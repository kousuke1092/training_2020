<?php
// インスタンスを実体化しよう
class Greeting {//クラス名
    public function sayHello() {
        echo "hello paiza";
    }
}
$greeting1 = new Greeting();//インスタンス化
$greeting1 ->sayHello();//メソッド呼び出し
?>
