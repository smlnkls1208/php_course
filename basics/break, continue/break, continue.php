<?php

$array = [1, 2, 10, 20, 2];
$x = 2;

function findXOfArray($array, $x)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $x) {
            return true;
        }
    }
    return false;
}
$result = findXOfArray($array, $x);


function findCountXOfArray($array, $x) {
    $count = 0;
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] == $x) {
            $count++;
        }
    }
    return $count;
}

$result2 = findCountXOfArray($array, $x);

echo $result . "<br>" . $result2;
