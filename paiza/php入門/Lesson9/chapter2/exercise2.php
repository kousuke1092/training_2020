<?php
// 間違い探し
class Greeting {
    public $msg;
    public $target;

    public function __construct() {
        $this->msg = "hello";
        $this->target = "paiza";
    }
}

class Hello extends Greeting {
    public function sayHello() {
        echo $this->msg." ".$this->target;//$this->を追加
    }
}

$player = new Hello();
$player->sayHello();
?>

