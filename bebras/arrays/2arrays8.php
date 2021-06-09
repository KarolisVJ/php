<?php

echo '<br><h1 style="color:tomato">8 užduotis</h1>';

$weirdass_masyvas = [];
$suma = 0;
for ($i = 0; $i < 10; $i++) {
    $random = rand(0, 5);
    if ($random == 0) {
        $weirdass_masyvas[$i] = rand(0, 10);
        $suma += $weirdass_masyvas[$i];
        continue;
    } else {
        $weirdass_masyvas[$i] = [];
        for ($j = 0; $j < $random; $j++) {
            $weirdass_masyvas[$i][$j] = rand(0,10);
            $suma += $weirdass_masyvas[$i][$j];
        }
    }
}

echo'<br><br>The weirdass masyvas '; print_r($weirdass_masyvas); echo'<br>Jo reiksmiu suma '; print_r($suma);

for ($i=0; $i < 9; $i++) {
    
    for ($j=0; $j <9; $j++) {
        if (is_array($weirdass_masyvas[$j]) && is_numeric($weirdass_masyvas[$j+1])) {
           if (array_sum($weirdass_masyvas[$j]) > $weirdass_masyvas[$j+1]) {
               $temp = $weirdass_masyvas[$j];
               $weirdass_masyvas[$j] = $weirdass_masyvas[$j+1];
               $weirdass_masyvas[$j+1] = $temp;
           }
        } elseif (is_array($weirdass_masyvas[$j]) && is_array($weirdass_masyvas[$j+1])) {
           if (array_sum($weirdass_masyvas[$j]) > array_sum($weirdass_masyvas[$j+1])) {
               $temp = $weirdass_masyvas[$j];
               $weirdass_masyvas[$j] = $weirdass_masyvas[$j+1];
               $weirdass_masyvas[$j+1] = $temp;
           }
        } elseif (is_numeric($weirdass_masyvas[$j]) && is_array($weirdass_masyvas[$j+1])) {
           if ($weirdass_masyvas[$j] > array_sum($weirdass_masyvas[$j+1])) {
               $temp = $weirdass_masyvas[$j];
               $weirdass_masyvas[$j] = $weirdass_masyvas[$j+1];
               $weirdass_masyvas[$j+1] = $temp;
           }
        } elseif ($weirdass_masyvas[$j] > $weirdass_masyvas[$j+1]) {
            $temp = $weirdass_masyvas[$j];
            $weirdass_masyvas[$j] = $weirdass_masyvas[$j+1];
            $weirdass_masyvas[$j+1] = $temp;
        }
       
    } 

}

echo'<br><br>Heres the weirdass masyvas sorted by the sums <pem>'; print_r($weirdass_masyvas);