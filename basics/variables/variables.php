<?php

$a = 3;
$b = 5;
$c = $a;
$a = $b;
$b = $c;
echo $a . " " . $b . "<br>";

$a = $a * $b;
$b = $a / $b;
$a = $a / $b;

echo $a . " " . $b;
