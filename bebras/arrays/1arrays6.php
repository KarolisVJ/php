<?php

echo '<br><h1 style="color:tomato">6 užduotis</h1>';

$fstArray = [];

for ($i = 0; $i < 100; $i++) {
    $fstArray[] = rand(100,200);
}

echo '<br>Pirmas arejus yra toks '; print_r($fstArray);

$sndArray = [];

function doesntContain ($num) {
    global $fstArray;
    if (!in_array($num, $fstArray)) {
        return $num;
    } else {
       return doesntContain(rand(100,200));
    }
}

for ($i = 0; $i < 100; $i++) {
    $sndArray[$i] = doesntContain(rand(100,200));
}

echo '<br>Antras arejus yra toks '; print_r($sndArray);

echo '<br><h1 style="color:tomato">7 užduotis</h1>';

$arrayFromFirst = [];

for ($i = 0; $i < 100; $i++) {
    $arrayFromFirst[] = $fstArray[array_rand($fstArray,1)];
}

echo'<br>Arejus is pirmo arejaus reiksmiu yra toks '; print_r($arrayFromFirst);

echo '<br><h1 style="color:tomato">8 užduotis</h1>';
$bendrasArejus = [$fstArray, $sndArray];

$arrayFromBoth = [];
for ($i=0; $i < 100; $i++) {
    $pirmIndex = array_rand($bendrasArejus, 1);
    $arrayFromBoth[] = $bendrasArejus[$pirmIndex][array_rand($bendrasArejus[$pirmIndex],1)];
}

echo'<br>Arejus is abieju areju yra '; print_r($arrayFromBoth);

echo '<br><h1 style="color:tomato">9 užduotis</h1>';

$indexFromValues = [];

for ($i = 0; $i < 100; $i++) {
    echo"$i ";
    $indexFromValues[$fstArray[$i]] = $sndArray[$i];
}

echo'<br>Arejus, kurio indexai yra pirmo reiksmes, o reiksmes - antro reiksmes yra toks '; print_r($indexFromValues);