<?php
if (!empty($_COOKIE['login']) || !empty($_COOKIE['password'])) {
    setcookie('login', '', time() - 1, '/');
    setcookie('password', '', time() - 1, '/');
}
header('Location: /index.php');
exit;