<?php
require __DIR__ . '/auth.php';
$login = getUserLogin();

if ($login !== null) {
    header('Location: /index.php');
    exit;
}

if (!empty($_POST)) {
    $login = $_POST['login'] ?? '';
    $password = $_POST['password'] ?? '';

    if (checkAuth($login, $password)) {
        setcookie('login', $login, 0, '/');
        setcookie('password', $password, 0, '/');
        header('Location: /index.php');
        exit;
    } else {
        $error = 'Ошибка авторизации';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Форма авторизации</title>
</head>
<body>

<?php if (isset($error)): ?>
    <span style="color: red;"><?= htmlspecialchars($error) ?></span>
<?php endif; ?>

<form action="login.php" method="post">
    <label for="login">Имя пользователя: </label>
    <input type="text" name="login" id="login" value="<?= htmlspecialchars($_POST['login'] ?? '') ?>">
    <br>
    <label for="password">Пароль: </label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="Войти">
</form>

</body>
</html>
