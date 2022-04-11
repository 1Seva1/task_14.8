<?php
require 'header.php';
require 'func.php';

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;

if (checkPassword($username, $password)) {
    session_start();
    $_SESSION['auth'] = true;
    $_SESSION['login'] = $username;
    // header('Location: /task_14.8/index.php');
    echo "Вы вошли как " . $_SESSION['login'] . "!";
    print_r ($_SESSION);
} 

$auth = $_SESSION['auth'] ?? null;

if (!$auth) {?>
<div class="login-page">
    <form action="login.php" class="form" method="post">
        <input name="login" type="text" placeholder="Логин"/>
        <input name="password" type="password" placeholder="Пароль"/>
        <input name="submit" class="button-login" type="submit" value="Войти">
    </form>
</div>
<?php }

