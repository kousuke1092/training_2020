<?php
// 学生メソッドを呼び出す
class Gakusei {
    // この下に、合計得点を戻り値として返すsumメソッドを記述する
    public static function sum($kokugo, $sansu) {
        return $kokugo + $sansu;//戻り値に合計金額を設定
    }
}

// この下に、合計得点を戻り値として返すGakuseiクラスsumメソッドを呼び出す
// 国語 = 70点、算数 = 43点
$total = Gakusei::sum(70,43);
echo "合計は" . $total . "点です。";
?>
