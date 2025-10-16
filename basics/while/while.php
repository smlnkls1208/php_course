<?php

$array = [];
$x = 345;
while ($x < 357) {
    if ($x % 2 == 0) {
        $array[] = $x;
    }
    $x++;
}

foreach ($array as $x) {
    echo $x . '<br>';
}

// while с условием true является бесконечным циклом, директива max_execution_time ограничивает время выполнения цикла
