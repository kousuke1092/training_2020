<?php 
class Player {
    public $myName;
    public $hp;
    public function __construct($name) {
        $this->myName = $name;
        $this->hp = 10;
        //その他初期化のいろいろな処理
    }

    public function walk() {
        echo "[" . $this->hp . "]";
        echo $this->myName . "は荒野を歩いていた。" . "\n";
    }
}

$player1 = new Player("戦士");
$player1->walk();

$player2 = new Player("魔法使い");
$player2->walk();

?>
こんな風に面倒な初期化をインスタンス化するたびに書くのを省略するのに使います
