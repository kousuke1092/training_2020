<?php
// クラスにメソッドを定義しよう
class Greeting {
    // この下に、sayHelloメソッドを記述する
    public function sayHello(){
        $message = "hello PHP";
        echo $message;
    }
}

$paiza = new Greeting();
$paiza->sayHello();
?>

