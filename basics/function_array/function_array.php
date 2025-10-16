<?php
$numbers = [1, 3, 2];
sort($numbers);

var_dump($numbers);

$string = implode(":", $numbers);
echo '<br>' . $string . '<br>';


$numbers2 = [1, 2, 3, 4, 5];
$numbers2 = array_slice($numbers2, 1, 3);
var_dump($numbers2);
