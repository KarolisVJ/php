<?php

$hername = 'Amanda';
$hersurname = 'Seyfried';

echo "<h1> Her name is $hername and her surname is $hersurname <3</h1>";

if (strlen($hername) < strlen($hersurname)) {
    echo "Trumpesnis vardas";
} else if (strlen($hersurname) == strlen($hername)) {
    echo "Vardas ir pavardė vienodo ilgio";
} else {
    echo "Pavardė trumpesnė";
}

echo '<br><h1 style="color:tomato">2 užduotis</h1>';

echo "<h2>I SAID, HER NAME IS ".strtoupper($hername)." and her surname is ".strtolower($hersurname).".</h2>";

echo '<br><h1 style="color:tomato">3 užduotis</h1>';

$herinitials = "$hername[0].$hersurname[0].";

echo "<h2>Her initials are $herinitials</h2>";

echo '<br><h1 style="color:tomato">4 užduotis</h1>';

$lastthreen = substr($hername, -3);
$lastthrees = substr($hersurname, -3);

echo '<h2>The last three letters of her names are <style=\"color:red\">'.$lastthreen.'</style> and <style=\"color:red\">'.$lastthrees.'</style></h2>';

echo '<br><h1 style="color:tomato">5 užduotis</h1>';

$american = "An American in Paris";
$amrepl = str_ireplace("a", "*", $american);
echo "<h2>Ar pakeitė visas a? $amrepl</h2>";

echo '<br><h1 style="color:tomato">6 užduotis</h1>';

echo "<br><h2>Stringe $american yra ".substr_count(strtolower($american), "a")." a raidės.</h2>";


echo '<br><h1 style="color:tomato">7 užduotis</h1>';

$toreplace = array("a","e","i","o","u", "y");
$breakfast = "Breakfast at Tiffany's";
$odyssey = "2001: A Space Odyssey";
$life = "It's a Wonderful Life";

echo "<br>Stringe $american ištrinam visas balses - ".str_ireplace($toreplace, "", $american);
echo "<br>Stringe $breakfast ištrinam visas balses - ".str_ireplace($toreplace, "", $breakfast);
echo "<br>Stringe $odyssey ištrinam visas balses - ".str_ireplace($toreplace, "", $odyssey);
echo "<br>Stringe $life ištrinam visas balses - ".str_ireplace($toreplace, "", $life);

echo '<br><h1 style="color:tomato">8 užduotis</h1>';

echo 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
