<?php

$carsSpeeds = [
        95,
        140,
        78
];

$sumOfSpeeds = 0;
$count = 0;

foreach ($carsSpeeds as $speed) {
    $sumOfSpeeds += $speed;
    $count++;
}

$averageSpeed = $sumOfSpeeds / $count;

echo 'Средняя скорость движения по трассе: ' . $averageSpeed;
