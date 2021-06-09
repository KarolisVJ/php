<?php

class Glass {

    private $volume = 0;
    private $amount = 0;


    public function __construct($vol) {
        $this->volume = $vol;
    }

    function ipilti($ml_in) {
        $pradinis_amount = $this->amount;
        if ($ml_in > ($this->volume - $this->amount)) {
            $this->amount = $this->volume;
          
        } else {
            $this->amount += $ml_in;
        }
        echo "<br>Ipyle "; echo $this->amount - $pradinis_amount; echo " ml";
    }

    function getAmount() {
        return $this->amount;
    }

    function getVolume() {
        return $this->volume;
    }

    public static function retrorun(){
        return 'The static has been accessed';
    }

    function ispilti($ml_out) {
        if ($ml_out > $this->amount) {
            $ispylimui = $this->amount;
            $this->amount = 0; 
            return $ispylimui;
        } else {
            $this->amount = $this->amount - $ml_out; 
            return $ml_out;
        }
    }
}

$stikline = new Glass(200);
$stikline2 = new Glass(150);
$stikline3 = new Glass(100);

$stikline->ipilti(180);
$stikline->ipilti(50);

echo"<br><h1>Stiklineje dabar yra "; echo $stikline->getAmount(); echo" ml skyscio.</h1>";

// echo"<br>"; echo $stikline2->ipilti($stikline->ispilti(180));

$stikline2->ipilti($stikline->ispilti(180));

echo"<br><h1>Antroje stiklineje dabar yra "; echo $stikline2->getAmount(); echo" ml skyscio.</h1>";

$stikline3->ipilti($stikline2->ispilti(150));

echo"<br><h1>Trecioje stiklineje dabar yra "; echo $stikline3->getAmount(); echo" ml skyscio. Antroj yra "; echo $stikline2->getAmount(); echo". Pirmoje yra "; echo $stikline->getAmount(); echo".</h1>";


