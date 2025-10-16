<?php

$header = '<h1>HEADER</h1>';

$sidebar = '<ul><li><a href="#">ссылка 1</a></li>';
$sidebar2 = '<li><a href="#">ссылка 2</a></li>';
$sidebar3 = '<li><a href="#">ссылка 3</a></li>';
$sidebar4 = '<li><a href="#">ссылка 4</a></li></ul>';

$content = '<h2>Заголовок статьи</h2>';
$content2 = '<p>Какой-то текст...</p>';
$content3 = '<p>Какой-то текст...</p>';
$content4 = '<p>Какой-то текст...</p>';

$footer = '<h2>FOOTER</h2>';

require __DIR__ . '/header.php';
require __DIR__ . '/sidebar.php';
require __DIR__ . '/content.php';
require __DIR__ . '/footer.php';