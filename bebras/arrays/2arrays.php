<?php

echo '<br><h1 style="color:tomato">1 užduotis</h1>';

$massive_array = [];

$moreThan10 = 0;

for ($i = 0; $i < 10; $i++) {
    $massive_array[$i] = [];
    for ($j = 0; $j < 5; $j++) {
        $massive_array[$i][$j] = rand(5,25);        
        if ($massive_array[$i][$j] > 10) {
            $moreThan10++;
        }
    }
    
}

$highest = max(max($massive_array));

echo '<br>Visas arejus atrodo sitaip --->'; print_r($massive_array);
echo "<br> Reiksmiu didesniu uz 10 yra $moreThan10, didziausia reiksme yra "; print_r($highest);

$suma = [0,0,0,0,0];

for ($i = 0; $i < 10; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $suma[$j] += $massive_array[$i][$j];
    }
}
   
echo '<br>Vienodu indexu suma yra '; print_r($suma);

echo '<br><h1 style="color:tomato">3 užduotis</h1>';
$letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
$letter_array = [];
for ($i = 0; $i < 10; $i++) {
    $letter_array[$i] = [];
    for ($j = 0; $j < rand(2,20); $j++) {
        $letter_array[$i][$j] = $letters[rand(0,25)];
    }
    sort($letter_array[$i]);
}

print_r ($letter_array);

usort($letter_array, function($el1, $el2) {
    global $letter_array;
    if (in_array('K', $el1)) {

    }
    if (count($el1) === count($el2)) {
        return 0;
    }
    return count($el1) < count($el2) ? -1 : 1;
});

echo '<br><br>SORTED!'; print_r($letter_array); 
echo'<br>K in array </br>';


// usort($letter_array, function($el1, $el2) {
//     echo'<br>Pirmas elementas'; print_r($el1);
//     if (in_array('K', $el1) && in_array('K', $el2)) {
//         if (count($el1) === count($el2)) {
//         return 0;
//         }
        
//     } else if (in_array('K', $el1)) {
//             print_r($el1);
//             return count($el1) < count($el2) ? -1 : 1;
//             }
    
    
// });

$temp;
for ($i = 0; $i < 10; $i++) {
       if (in_array('K', $letter_array[$i]))  {
            echo'<br>Found K!<br>';
            $temp = $letter_array[$i];
            unset($letter_array[$i]);
            array_unshift($letter_array, $temp);            
        }
}

$kcount = 0;
for ($i = 0; $i < 10; $i++) {
    if (in_array('K', $letter_array[$i]))  {
        $kcount++;
    }
    
}

echo "<br>K count is $kcount!";

for ($k = 0; $k < $kcount - 1; $k++) {
    for ($kk = 0; $kk < $kcount - 1; $kk++) {
    if (count($letter_array[$kk]) > count($letter_array[$kk+1])) {
        echo'<br>found first longer than the second!';
        $temp = $letter_array[$kk];
        $letter_array[$kk] = $letter_array[$kk+1];
        $letter_array[$kk+1] = $temp;
    }
    }
 }


echo '<br><br>With the letter K '; print_r($letter_array);

usort($letter_array, function($el1, $el2) {
    echo'<br>';
});