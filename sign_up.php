<?php

$login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING);
$repassword = filter_var(trim($_POST["repassword"]), FILTER_SANITIZE_STRING);

$db = mysqli_connect("localhost", "root", "", "blog_db");

if(strlen($login) < 2){
    echo "Недопустимая длина логина <a href=\"index.php\">Back</a>";
    exit();
} elseif(strlen($password) < 8){
    echo "Недопустимая длина пароля <a href=\"index.php\">Back</a>";
    exit();
} elseif($password != $repassword){
    echo "Не совпадают пароли <a href=\"index.php\">Back</a>";
    exit();
}

$password = md5($password);

$sql = "SELECT COUNT(id) AS 'count' FROM `users` WHERE `user` = \"$login\"";
$login_count = mysqli_query($db, $sql);
$query_result = mysqli_fetch_assoc($login_count);

if ($query_result['count'] != 0){
    echo "Пользователь с таким именем уже имеется <a href=\"index.php\">Back</a>";
    exit();
} 

$sql = "INSERT INTO `users` (`user`, `password`) VALUES (\"$login\", \"$password\")";

$db->query($sql);
$db->close();

header('Location: log_in.php');

?>