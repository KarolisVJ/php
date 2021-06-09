<?php

echo '<br><h1 style="color:tomato">3 užduotis</h1>';


$four = ['A','B','C','D'];
$letters = [];
$Ano = 0;
$Bno = 0;
$Cno = 0;
$Dno = 0;

for ($i = 0; $i < 200; $i++) {
    $letters[] = $four[rand(0,3)];
    if ($letters[$i] == 'A') {
        $Ano++;
    }
    if ($letters[$i] == 'B') {
        $Bno++;
    }
    if ($letters[$i] == 'C') {
        $Cno++;
    }
    if ($letters[$i] == 'D') {
        $Dno++;
    }
}

echo '<br>Cia visas raidziu masyvas';
print_r($letters);

echo "<br>Jame yra $Ano A raidziu, $Bno B raidziu, jame yra $Cno C raidziu ir $Dno D raidziu";

for ($i = 0; $i < $Ano; $i++) {
    $letters[$i] = 'A';
    }
for ($i = $Ano; $i < $Ano + $Bno; $i++) {
    $letters[$i] = 'B';
    }
for ($i = $Ano + $Bno; $i < $Ano + $Bno + $Cno; $i++) {
    $letters[$i] = 'C';
    }
for ($i = $Ano + $Bno + $Cno; $i < $Ano + $Bno + $Cno + $Dno; $i++) {
    $letters[$i] = 'D';
    }

echo '<br>Cia raidziu masyvas surusiuotas  --->';
print_r($letters);