<?php
// 間違い探し
class Greeting {
    public $myName;//privateからpublicに変更

    public function __construct($name) {
        $this->myName = $name;
    }

    private function sayHello() {
        echo "hello " . $this->myName;
    }
    public function output(){//privateを書き直す方法もあったがoutputメソッドを作成
        $this->sayHello();
    }
}

$paiza = new Greeting("paiza");
$paiza->output();//sayHelloメソッドからoutputメソッドに変更。
?>

