<?php

// オーバーライド

class Car
{
    public $gasoline = 30;


//アクションつまりfunctionの外にある引数を使う時は$thisをつかう。function内であれば$thisを使う必要はない
    public function go()
    {
        if ($this->gasoline > 0)
        {
            echo '車が走りました！ ';
            $this->gasoline--;
            echo '残りのガソリンは' . $this->gasoline . 'Lです<br>';
        }
        else
        {
            echo '給油してください！<br>';
        }
    }

    public function supply($litter)
    {
        $this->gasoline += $litter;
        echo $litter . 'L給油しました。残りのガソリンは' . $this->gasoline . 'Lです！<br>';
    }

}



class Taxi extends Car
{
    //constant(定数)の省略
    const STARTING_FARE = 730;
//定数にアクセスする時はself::****とする。
    public $fare = self::STARTING_FARE;
//    以下のような書き方でも同じ
//    public $fare = 730;

//タクシーの台数は最初はゼロ
    public static $numberOfTaxis = 0;

    public function __construct($gasoline)
    {
//$this->gasolineするごとに$gasolineに値を入れていく
        $this->gasoline = $gasoline;
//$numberOfTaxisを実行するごとに1ずつ+される
        self::$numberOfTaxis++;
    }

    public static function countTaxis()
    {
        echo 'タクシーの生産台数は' . self::$numberOfTaxis . '台です<br>';
    }


//go()が呼出されるたびにfareも呼び出される
    public function go()
    {
        parent::go();
//fareが呼出されるたびに90プラスされていく
        $this->fare += 90;
    }

    public function checkout()
    {
        echo 'お会計は'. $this->fare. '円です。<br>';
//定数を終わらせる時はself::****とする。
        $this->fare = self::STARTING_FARE;
    }
}

$myTaxi1 = new Taxi(50);
$myTaxi2 = new Taxi(50);
$myTaxi3 = new Taxi(50);

echo 'ガソリンの残量は'. $myTaxi1->gasoline. 'Lです。<br>';
$myTaxi1->go();

echo 'ガソリンの残量は'. $myTaxi2->gasoline. 'Lです。<br>';
$myTaxi2->go();

Taxi::countTaxis();


//echo Taxi::$numberOfTaxis;


// $myTaxi = new Taxi;

// //$myTaxi->supply(10);
// $myTaxi->go();
// //echo '現在の運賃は'. $myTaxi->fare. '円です。<br>';
// //$myTaxi->supply(5);
// //echo '現在のガソリン残量は'. $myTaxi->gasoline. 'Lです。';
// $myTaxi->go();
// $myTaxi->go();
// $myTaxi->checkout();
// //go()が呼出されるたびにfareも呼び出されるので270円になる。
// //echo '合計の運賃は'. $myTaxi->fare . '円です';

// $myTaxi->go();
// $myTaxi->go();
// $myTaxi->go();
// $myTaxi->checkout();

