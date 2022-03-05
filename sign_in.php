<?php

$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$password = md5(filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING));

$db = mysqli_connect("localhost", "root", "", "blog_db");

$sql = "SELECT COUNT(id) AS 'count' FROM `users` WHERE `user` = \"$login\"";
$login_count = mysqli_query($db, $sql);
$query_result = mysqli_fetch_assoc($login_count);

if ($query_result['count'] == 0){
    echo "Пользователь с таким именем не найден <a href=\"log_in.php\">Back</a>";
    exit();
} 

$sql = "SELECT `password` FROM `users` WHERE `user` = \"$login\"";
$password_db = mysqli_query($db, $sql);
$password_db = mysqli_fetch_assoc($password_db);
$password_db = $password_db['password'];

if($password != $password_db){
    echo "Неверный пароль <a href=\"log_in.php\">Back</a>";
    exit();
}

setcookie('user', $login, time() + 3600 * 24 * 14);

$db->close();

header('Location: main.php');

?>