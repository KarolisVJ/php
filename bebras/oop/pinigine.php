<?php

class Wallet {
    private $bills = 0;
    private $coins = 0;

    public function add($sum) {
        if ($sum >= 2) {
            $this->bills += $sum;
        } else {
            $this->coins += $sum;
        }
       
    }

    public function count() {
        return $this->bills + $this -> coins;
    }
    public function getBills(){
        return $this->bills;
    }
    public function getCoins(){
        echo "$this->coins";
    }
}

$pinigine = new Wallet();
$pinigine->add(1.5);
$pinigine->add(5);
$pinigine->add(1);
$pinigine->add(15);

echo "<h1>Pinigineje kupiuromis yra "; echo $pinigine->getBills(); echo " euru, o monetomis " ; echo $pinigine->getCoins(); echo " euru. Viso pinigu yra "; echo $pinigine->count();" .</h1>";

?>
