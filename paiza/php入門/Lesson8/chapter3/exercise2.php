<?php
class Greeting {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function sayHello() {
        echo "hello " . $this->myName;
    }
}

// この下に、インスタンス生成とメソッド呼び出しを追加する

$greeting1 = new Greeting("PHP");
$greeting1 ->sayHello();
?>
