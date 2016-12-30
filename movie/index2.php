<?php

// クラスの継承について

class Car
{
    //public $gasoline = 30;
    public $gasoline;

    public function __construct($gasoline)
    {
        $this->gasoline = $gasoline;
    }

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

// $myCar = new Car(10);
// echo 'ガソリンの残量は'. $myCar->gasoline. 'Lです。<br>';
// $myCar->go();

// $myCar2 = new Car(30);
// echo 'ガソリンの残量は'. $myCar2->gasoline. 'Lです。<br>';
// $myCar2->go();
