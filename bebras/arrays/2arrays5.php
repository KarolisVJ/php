<?php

echo '<br><h1 style="color:tomato">5 užduotis</h1>';

$thirty_array = [];

for ($i = 0; $i < 30; $i++) {
    $thirty_array[$i] = ["user_id" => rand(1,100), "place_in_row" => rand(0,100)];
   
}

echo'<br> Va tas masyvas su user_id '; print_r($thirty_array);