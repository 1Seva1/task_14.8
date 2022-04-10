<?php
require 'func.php';
$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
print_r ($_POST);
echo getUsersList()[$username];
if (checkPassword($username, $password)) {
    echo "<br> Пользователь " . $username . "вошел!";
} else {
    echo "<br> NO";
}

?>
