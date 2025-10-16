<?php

if (empty($_GET)) {
    return 'Ничего не передано';
}

if (empty($_GET['operation'])) {
    return 'Операция не передана';
}

if ($_GET['x1'] === '' || $_GET['x2'] === '') {
    return 'Аргументы 1 или 2 не переданы';
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];
$operations = $_GET['operation'];

if (is_numeric($x1) && is_numeric($x2)) {
    switch ($operations) {
        case '+':
            $result = $x1 + $x2;
            break;
        case  '-':
            $result = $x1 - $x2;
            break;
        case  '/':
            $result = $x2 != 0 ? ($x1 / $x2) : 'На ноль делить нельзя';
            break;
        case  '*':
            $result = $x1 * $x2;
            break;
        default:
            return 'Операция не поддерживается';
    }
} else {
    return 'Введите число';
}

$expression = $x1 . ' ' . $operations . ' ' . $x2 . ' = ';

return $expression . $result;
