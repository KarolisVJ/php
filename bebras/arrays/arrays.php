<?php

echo '<br><h1 style="color:tomato">1 užduotis</h1>';

$fsarray = [];
for ($i = 0; $i < 30; $i++) {
    $fsarray[] = rand(5,25);
}

print_r($fsarray);

echo '<br><h1 style="color:tomato">2 užduotis</h1>';

$more_than_ten = 0;
$didziausias = 0;
$suma = 0;
$minus_index = [];
for ($i = 0; $i < 30; $i++) {
    $suma += $fsarray[$i];
    $minus_index[$i] = $fsarray[$i] - $i;
    if ($fsarray[$i] > 10) {
        $more_than_ten++;
    }
    if ($fsarray[$i] > $didziausias) {
        $didziausias = $fsarray[$i];
    }
}

echo "<br><br> Didesniu už 10 yra ".$more_than_ten;
echo "<br>Didziausias masyvo narys yra $didziausias";
echo "<br>Visu reiksmiu suma yra $suma";
echo "<br>Naujasis masyvas reiksme minus index "; print_r($minus_index);

for ($i = 0; $i < 10; $i++) {
    $fsarray[] = rand(5,25);
}

echo '<br>';
print_r($fsarray);
$porines = [];
$neporines = [];
for ($i = 0; $i < 40; $i++) {
    if ($i % 2 == 0) {
        $porines[] = $fsarray[$i];
    }
    if ($i % 2 == 1) {
        if ($fsarray[$i] > 15) {
            $neporines[] = 0;
        } else {
        $neporines[] = $fsarray[$i];
        }
    }
}

echo '<br>Poriniu indexu arejus --->'; print_r($porines);
echo '<br>Neporiniu indexu arejus --->'; print_r($neporines);

for ($i = 0; $i < 20; $i++) {
   if ($porines[$i] > 10) {
       echo "<br>Pirmas poriniu indexas, kurio reiksme yra didesne nei 10, yra $i";
       break;
   }
}

for ($i = 0; $i < 20; $i++) {
    if ($neporines[$i] > 10) {
        echo "<br>Pirmas neporiniu indexas, kurio reiksme yra didesne nei 10, yra $i";
        break;
    }
 }

for ($i = 0; $i < 40; $i++) {
    if ($i % 2 == 0) {
        unset($fsarray[$i]);
    }
}

echo '<br>Cia gi kas liko is Didziojo arejaus po to, kai buvo istrinti poriniai indeksai';
print_r($fsarray);