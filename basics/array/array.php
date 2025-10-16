<?php

$array = [
    'address' => [
        'street' => 'Titova',
        'house' => [
            'number' => '12',
            'apartment' => 187,
        ],
    ],
];
$array['address']['house']['build'] = 'B';

var_dump($array);

?>

