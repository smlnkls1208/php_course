<?php
function minValue(float $a, float $b, float $c) {
    if ($a <= $b && $a <= $c) return $a;
    else if ($b <= $c && $b <= $a ) return $b;
    else return $c;
}
$a = 1.7;
$b = 2.7;
$c = 0.7;
echo minValue($a, $b, $c) . " является минимальным числом";

function multiplication2(&$x, &$y) {
    $x *= 2;
    $y *= 2;

}
$a = 10;
$b = 2;

multiplication2($a,$b);

function factorial($n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

echo factorial(5);

function displayNum($num) {
    if ($num < 0) {
        return;
    }
    displayNum($num - 1);
    echo $num . " ";
}
displayNum(5);
