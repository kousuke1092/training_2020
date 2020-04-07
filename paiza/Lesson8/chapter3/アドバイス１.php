<?php 
class Player {
    public $myName;
    public function __construct($name) {  // 2 コンストラクタが実行される。渡された「戦士」が $name に格納される。
        $this->myName = $name;            //３ $myName に $name が格納される。 $myName には「戦士」 が格納されている状態。
    }
    public function walk() {   // 5. walk 関数が実行される。
        echo $this->myName . "は荒野を歩いていた。" . "\n";   // 6. $myName 変数の値が展開され 画面に「戦士は荒野を歩いていた。」と表示される。
    }
}

$player1 = new Player("戦士");   // 1. インスタンス化する
$player1->walk();                // 4. walk() 関数が実行される。


?>

//コンストラクタ化はクラスが増えてきた際に同じ変数名でも使えるようにするため…？
