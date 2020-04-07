Q1:演習課題「クラスからオブジェクトを作ろう」
右のコードには、Greetingクラスに、メッセージを表示するsayHelloメソッドが定義されています。
このクラスを実体化して、sayHelloメソッドを呼び出し、メッセージを表示してください。

<?php
// インスタンスを実体化しよう
class Greeting {
    public function sayHello() {
        echo "hello paiza";
    }
}
$greeting1 = new Greeting();
$greeting1 ->sayHello();
?>