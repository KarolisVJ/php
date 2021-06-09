<?php

echo '<br><h1 style="color:tomato">4 užduotis</h1>';

function be_liekanos (int $arg) {
    $counter = 0;
    $dalinasi = 2;
    if ($arg > 1) {
        while ($dalinasi < $arg) {
            if ($arg % $dalinasi == 0) {
                $counter++;

            }
            $dalinasi++;
        }
        return $counter;

    } else {
        return "Cia tik vienetas!";
    }
}

echo '<br>Tiek turi dalinamuju '; print_r(be_liekanos(36));



$eilinis = [];
for ($i = 0; $i < 100; $i++) {
    $eilinis[$i] = rand(33,77);
}


usort($eilinis, function($a,$b) {
    return be_liekanos($a) <=> be_liekanos($b);
});

echo'<br>ar surusiavo?'; print_r($eilinis);

echo '<br><h1 style="color:tomato">6 užduotis</h1>';


$kiekTuMasyvuDarBus = [];
for ($i = 0; $i < 100; $i++) {
    $kiekTuMasyvuDarBus[$i] = rand(333,777);
}

echo'<br>Yes, sir, masyvas sudarytas!'; print_r($kiekTuMasyvuDarBus);

// for ($i = 0; $i < 100; $i++) {
//     echo"<br>$kiekTuMasyvuDarBus[$i]";
//     if (be_liekanos($kiekTuMasyvuDarBus[$i]) === 0) {
//         echo"<br>$kiekTuMasyvuDarBus[$i]";
//         unset($kiekTuMasyvuDarBus[$i]);
//     }
// }

foreach ($kiekTuMasyvuDarBus as $key => $value) {
    if (be_liekanos($kiekTuMasyvuDarBus[$key]) === 0) {
        unset($kiekTuMasyvuDarBus[$key]);
        // array_splice($kiekTuMasyvuDarBus, $key, 1);
    }
}

array_values($kiekTuMasyvuDarBus);

echo'<br>Ar istryne?'; print_r($kiekTuMasyvuDarBus);
$primes = [337, 347, 349, 353, 359, 367, 373, 379, 383, 389, 397, 401, 409, 419, 421, 431, 433, 439, 443, 449, 457, 461, 463, 467, 479, 487, 491, 499, 503, 509, 521, 523, 541, 547, 557, 563, 569, 571, 577, 587, 593, 599, 601, 607, 613, 617, 619, 631, 641, 643, 647, 653, 659, 661, 673, 677, 683, 691, 701, 709, 719, 727, 733, 739, 743, 751, 757, 761, 769, 773, 787, 797, 809, 811, 821, 823, 827, 829, 839, 853, 857, 859, 863, 877, 881, 883, 887, 907, 911, 919, 929, 937, 941, 947, 953, 967, 971, 977, 983, 991, 997];

echo'<br><br>Intersekt';
print_r(array_intersect($kiekTuMasyvuDarBus, $primes));



function begalinis($ilgis, $kartai, $new = false) {
    $array = [];
    static $counter = 0;
    if ($new) {
        $counter = 0;
    }
    $counter++;
    for ($i = 0; $i < $ilgis - 1; $i++) {
        if ($i < $ilgis - 1) {
            $array[$i] = rand(0,10);
            
        }
    }

    //Kodėl užloopina su ciklu?
    if ($counter == $kartai) {
        $array[$ilgis-1] = 0;

    } else {
        $array[$ilgis - 1] = begalinis($ilgis, $kartai);
    }
    $counter = 0;
    return $array;
}

echo'<br><br>Ar gavos cia kas?  '; print_r(begalinis(rand(10,20),rand(10,30), true));


// 7.	Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra lygus 0;

