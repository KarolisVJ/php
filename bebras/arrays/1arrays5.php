<?php

echo '<br><h1 style="color:tomato">5 užduotis</h1>';
//KAIP PAŽIŪRĖT BUILT IN FUNKCIJOS SOURCE CODE'Ą????

$four = ['A','B','C','D'];
$letters1 = [];
$letters2 = [];
$letters3 = [];
$letterssum = [];


for ($i = 0; $i < 200; $i++) {
    $letters1[] = $four[rand(0,3)];
    $letters2[] = $four[rand(0,3)];
    $letters3[] = $four[rand(0,3)];
    $letterssum[] = $letters1[$i].$letters2[$i].$letters3[$i];
}

echo '<br>';
print_r($letterssum);
$uniques = 0;
$kombinacija = '';

for ($i = 0; $i < count($four); $i++) {
    $kombinacija[0] = $four[$i];
        for ($j = 0; $j < count($four); $j++) {
            $kombinacija[1]= $four[$j];
            for ($k = 0; $k < count($four); $k++) {
                $kombinacija[2] = $four[$k];
                if (in_array($kombinacija, $letterssum)) {
                    $uniques++;
                }
            }
            
        }
    
}

echo "<br>Unikaliu kombinaciju arejuje yra $uniques"; 

