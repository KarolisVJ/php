<?php

echo '<br><h1 style="color:tomato">1 užduotis</h1>';

function stickit ($tekstas) {
    return "<br><h1>$tekstas</h1>";
}

print_r(stickit('Stickit Works!'));

echo '<br><h1 style="color:tomato">2 užduotis</h1>';

function stickit2 ($tagno, $tekstas) {
    return "<br><h$tagno>$tekstas</h$tagno>";
}

print_r(stickit2(2, 'Stickit Works Again!'));


echo '<br><h1 style="color:tomato">3 užduotis</h1>';

function bigNums ($stringass) {
    $str2echo = '';
    $str_array = preg_split('/(?<=\D)(?=\d)|(?<=\d)(?=\D)/', $stringass, 0);
    for ($i = 0; $i < count($str_array); $i++) {
        if (is_numeric($str_array[$i])) {
            $str2echo .= "<h1>$str_array[$i]</h1>";
        } else {
            $str2echo .= $str_array[$i];
        }
    }

    return $str2echo;
    
}

print_r(bigNums(md5(time())));

// print_r(preg_split('/(?<=\D)(?=\d)|(?<=\d)(?=\D)/', '0696f76d847de84da5dc0545e76fb602', 0));