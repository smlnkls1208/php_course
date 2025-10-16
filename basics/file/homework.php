<?php

$file = file_get_contents(__FILE__);
echo $file;

$files = scandir(__DIR__ . '/');
foreach ($files as $dirr) {
    if (is_dir($dirr)) {
        echo $dirr . '<br>';
    }
}


