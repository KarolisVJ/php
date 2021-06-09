<?php

$vardas = 'Polikarpas';
$pavarde = 'Rugstynis';
$gimimo_metai = 1972;
$dabartiniai_metai = 2021;

?>

Aš esu <?php echo $vardas ?> <?php echo $pavarde ?>, man yra <?php echo $dabartiniai_metai - $gimimo_metai ?> metai.

<?php
echo '<br> 2 ';

$pirmas = rand(0,4);
$antras = rand(0,4);
$rez;

if ($pirmas > $antras) {
    $rez = $pirmas/$antras;
} else if ($antras > $pirmas) {
    $rez = $antras/$pirmas;
}

echo "<br> Pirmas kintamasis yra $pirmas, antras kintamasis yra $antras, dalyba didesnio iš mažesnio lygu $rez";

echo '<br><h2>3</h2>';

$first = rand(0,25);
$second = rand(0,25);
$third = rand(0,25);

echo "<br> Pirmas kintamasis yra $first, antras kintamasis yra $second, trečias kintamasis yra $third";

if (($first <= $second && $first >= $third) || ($first >= $second && $first <= $third)) {
    echo "<br>Vidurinis yra $first";
} else if (($second <= $first && $second >= $third) || ($second <= $third && $second >= $first)) {
    echo "<br>Vidurinis yra $second";
} else {echo "<br>Vidurinis yra $third";}

echo '<br><h2>4</h2>';

$tr_1 = rand(1,10);
$tr_2 = rand(1,10);
$tr_3 = rand(1,10);

echo "<br> Pirmas kintamasis yra $tr_1, antras kintamasis yra $tr_2, trečias kintamasis yra $tr_3";

if ($tr_1 + $tr_2 <= $tr_3 || $tr_2 + $tr_3 <= $tr_1 || $tr_1 + $tr_3 <= $tr_2) {
    echo '<br>Trikampio suformuoti negalima';
} else {echo '<br>Trikampįs suformuotas';}

echo '<br><h2>5</h2>';

$rand1 = rand(0,2);
$rand2 = rand(0,2);
$rand3 = rand(0,2);
$rand4 = rand(0,2);

echo "<br> Pirmas kintamasis yra $rand1, antras kintamasis yra $rand2, trečias kintamasis yra $rand3, o ketvirtas - $rand4";

echo '<br><h2>6</h2>';

$antraste = rand(1,6);

echo "<br> <h$antraste>Valio, $antraste!</h$antraste>";

echo '<br><h2>7</h2>';





?>


