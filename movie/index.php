<?php

// ガソリンの残量によって処理を分ける

class Car
{
    public $gasoline = 30;

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

$myCar = new Car;


for ($i = 0; $i < 50; $i++)
{
    $myCar->go();
}

$myCar->supply(10);
