<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

if ($login === 'admin' && $password === 'Pa$$w0rd') {
    $isAuthorized = 'Авторизация прошла';
}
else if ($login !== 'admin') {
    $isAuthorized = 'Пользователь не найден';
}
else $isAuthorized = 'Пароль неверный'

?>
<html>
<head>
    <title>Результат авторизации</title>
</head>
<body>
<p>
    <?= $isAuthorized ?>
</p>
</body>
</html>