<?php

$tenNums = [rand(5,25), rand(5,25)];

function upToTen ($num1, $num2) {
    global $tenNums;
    if (count($tenNums) == 10) {
        return;
    } else {
        $tenNums[] = $num1 + $num2;
        return upToTen($num2, $num1 + $num2);
    }
}

upToTen ($tenNums[0], $tenNums[1]);

echo'<br>Sitas Fibonacci yra toks '; print_r ($tenNums);
echo'<br>';

$var = 5;
echo"var = $var";

// echo "$what";